<?php include "header.php"; ?>
<?php $keyword;
if(isset ($_GET['keyword'])){
    $keyword = $_GET['keyword'];
    $getSearchNames = $search->getSearchName($keyword);
}

// Lấy số trang trên thanh địa chỉ
if(isset($_GET['page'])){
    $page = $_GET['page'];
}
else{
    $page = 1;
}
// hiển thị 5 sản phẩm trên 1 trang
$perPage = 3;
//Tính tổng số dòng
$total = count($product->getAllFeatureProducts());
// lấy đường dẫn đến file hiện hành
$url = $_SERVER['PHP_SELF'];
$getAllProducts = $product->getAllProductss($page,$perPage);
?>
            <div class="col-lg-9">
                <section class="product-area li-trending-product li-trending-product-2 pt-60 pb-45">
                    <div class="container">
                        <div class="row">
                            <?php foreach($getSearchNames as $value):?>
                                <div class="col-md-4">
                                            <div class="as">
                                                <div class="single-product-wrap">
                                                    <div class="product_desc">
                                                        <div class="product_desc_info">
                                                            <div class="productinfo text-center">
                                                                <img style="width:85%"
                                                                    src="public/images/<?php echo $value['pro_image']?>" alt="" />
                                                                <h4 class="new-price"><?php echo number_format($value['price'])?> VND</h4>
                                                                <h4 class="product_name"><a
                                                                    href="detail.php?id=<?php echo $value['id']?>"><?php echo $value['name'] ?></a>
                                                                </h4>
                                                                
                                                            </div>
                                                        <div class="add-actions" style="padding-left: 40px;">
                                                            <ul class="add-actions-link" style="margin-bottom: -50px;">
                                                                <li class="add-cart active"><a href="shopping-cart.php?id=<?=$value['id']?>">Add to cart</a></li>
                                                                <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                                                <li><a href="detail.php?id=<?php echo $value['id']?>"<?php echo $value['name'] ?> title="quick view" class="quick-view-btn" ><i class="fa fa-eye"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            
                                            
                                        </div>

                                
                            <?php endforeach ?>
                        </div>
                        <div class="row">
                                        <ul class="pagination" style="padding-top: 100px;">
                                            <?php echo $product->paginate($url, $total, $page, $perPage)  ?>
                                        </ul>
                                    </div>
                    </div>
                </section>
        </div>