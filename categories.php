<?php include "header.php"; ?>

<div class="col-lg-9">
    <section class="product-area li-trending-product li-trending-product-2 pt-60 pb-45">
        <div class="container">
            <div class="row">
                <?php 
                                                    if(isset($_GET['id'])){
                                                    foreach($getItem as $value){
                                                    if($value['manu_id'] == $id)  {
                                                ?>
                <div class="col-md-4">
                    <div class="as">
                        <div class="single-product-wrap">
                            <div class="product_desc">
                                <div class="product_desc_info">
                                    <div class="productinfo text-center">
                                        <img style="width:85%" src="public/images/<?php echo $value['pro_image']?>"
                                            alt="" />
                                        <h4 class="new-price"><?php echo number_format($value['price'])?> VND</h4>
                                        <h4 class="product_name"><a
                                                href="detail.php?id=<?php echo $value['id']?>"><?php echo $value['name'] ?></a>
                                        </h4>

                                    </div>
                                    <div class="add-actions" style="padding-left: 40px;">
                                        <ul class="add-actions-link" style="margin-bottom: -50px;">
                                            <li class="add-cart active"><a
                                                    href="shopping-cart.php?id=<?=$value['id']?>">Add to cart</a></li>
                                            
                                            <li><a href="detail.php?id=<?php echo $value['id']?>"
                                                    <?php echo $value['name'] ?> title="quick view"
                                                    class="quick-view-btn"><i class="fa fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>


                </div>
                <?php }}}
                            if(isset($_GET['product'])){
                            foreach($getItem as $value){
                            if($value['type_id'] == $product)  {
                            ?>
                <div class="col-md-4">
                    <div class="as">
                        <div class="single-product-wrap">
                            <div class="product_desc">
                                <div class="product_desc_info">
                                    <div class="productinfo text-center">
                                        <img style="width:85%" src="public/images/<?php echo $value['pro_image']?>"
                                            alt="" />
                                        <h4 class="new-price"><?php echo number_format($value['price'])?> VND</h4>
                                        <h4 class="product_name"><a
                                                href="detail.php?id=<?php echo $value['id']?>"><?php echo $value['name'] ?></a>
                                        </h4>

                                    </div>
                                    <div class="add-actions" style="padding-left: 40px;">
                                        <ul class="add-actions-link" style="margin-bottom: -50px;">
                                            <li class="add-cart active"><a
                                                    href="shopping-cart.php?id=<?=$value['id']?>">Add to cart</a></li>
                                            <li><a class="links-details" href="wishlist.html"><i
                                                        class="fa fa-heart-o"></i></a></li>
                                            <li><a href="detail.php?id=<?php echo $value['id']?>"
                                                    <?php echo $value['name'] ?> title="quick view"
                                                    class="quick-view-btn"><i class="fa fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>


                </div>
                <?php }}} ?>
            </div>
        </div>
    </section>
</div>
</div>
</div>
</div>

<div class="footer">
            <!-- Begin Footer Static Top Area -->

            <!-- Footer Static Top Area End Here -->
            <!-- Begin Footer Static Middle Area -->
            <div class="footer-static-middle">
                <div class="container">
                    <div class="footer-logo-wrap pt-50 pb-35">
                        <div class="row">
                            <!-- Begin Footer Logo Area -->
                            <div class="col-lg-4 col-md-6">
                                <div class="footer-logo">
                                    <img src="images/menu/logo/1.jpg" alt="Footer Logo">
                                    <p class="info">
                                        We are a team of designers and developers that create high quality HTML Template
                                        & Woocommerce, Shopify Theme.
                                    </p>
                                </div>
                                <ul class="des">
                                    <li>
                                        <span>Address: </span>
                                        53 V?? V??n Ng??n / Cao ?????ng C??ng Ngh??? th??? ?????c
                                    </li>
                                    <li>
                                        <span>Phone: </span>
                                        <a href="#">(+123) 123 321 345</a>
                                    </li>
                                    <li>
                                        <span>Email: </span>
                                        <a href="gmail.com">doanngochuy12@gmail.com</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Footer Logo Area End Here -->
                            <!-- Begin Footer Block Area -->
                            <div class="col-lg-2 col-md-3 col-sm-6">
                                <div class="footer-block">
                                    <h3 class="footer-block-title">Product</h3>
                                    <ul>
                                        <li><a href="#">??i???n tho???i</a></li>
                                        <li><a href="#">Tai nghe</a></li>
                                        <li><a href="#">Loa</a></li>
                                        <li><a href="#">S???c d??? ph??ng</a></li>
                                        <li><a href="#">Laptop</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Footer Block Area End Here -->
                            <!-- Begin Footer Block Area -->
                            <div class="col-lg-2 col-md-3 col-sm-6">
                                <div class="footer-block">
                                    <h3 class="footer-block-title">NHOM 10</h3>
                                    <ul>
                                        <li><a href="#">??o??n Ng???c Huy</a></li>
                                        <li><a href="#">V??n C??ng Nam</a></li>
                                        <li><a href="#">Tr???n L?? Th???y Ti??n</a></li>
                                        <li><a href="#">????? Minh T??</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Footer Block Area End Here -->
                            <!-- Begin Footer Block Area -->
                            <div class="col-lg-4">
                                <div class="footer-block">
                                    <h3 class="footer-block-title">Follow Us</h3>
                                    <ul class="social-link">
                                        <li class="twitter">
                                            <a href="https://twitter.com/" data-toggle="tooltip" target="_blank"
                                                title="Twitter">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="rss">
                                            <a href="https://rss.com/" data-toggle="tooltip" target="_blank"
                                                title="RSS">
                                                <i class="fa fa-rss"></i>
                                            </a>
                                        </li>
                                        <li class="google-plus">
                                            <a href="https://www.plus.google.com/discover" data-toggle="tooltip"
                                                target="_blank" title="Google +">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                        </li>
                                        <li class="facebook">
                                            <a href="https://www.facebook.com/" data-toggle="tooltip" target="_blank"
                                                title="Facebook">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="youtube">
                                            <a href="https://www.youtube.com/" data-toggle="tooltip" target="_blank"
                                                title="Youtube">
                                                <i class="fa fa-youtube"></i>
                                            </a>
                                        </li>
                                        <li class="instagram">
                                            <a href="https://www.instagram.com/" data-toggle="tooltip" target="_blank"
                                                title="Instagram">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Begin Footer Newsletter Area -->
                                
                                <!-- Footer Newsletter Area End Here -->
                            </div>
                            <!-- Footer Block Area End Here -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer Static Bottom Area End Here -->
        </div>
<!-- Footer Area End Here -->
<!-- Begin Quick View | Modal Area -->
<div class="modal fade modal-wrapper" id="exampleModalCenter">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal-inner-area row">
                    <div class="col-lg-5 col-md-6 col-sm-6">
                        <!-- Product Details Left -->
                        <div class="product-details-left">
                            <div class="product-details-images slider-navigation-1">
                                <div class="lg-image">
                                    <img src="images/product/large-size/1.jpg" alt="product image">
                                </div>
                                <div class="lg-image">
                                    <img src="images/product/large-size/2.jpg" alt="product image">
                                </div>
                                <div class="lg-image">
                                    <img src="images/product/large-size/3.jpg" alt="product image">
                                </div>
                                <div class="lg-image">
                                    <img src="images/product/large-size/4.jpg" alt="product image">
                                </div>
                                <div class="lg-image">
                                    <img src="images/product/large-size/5.jpg" alt="product image">
                                </div>
                                <div class="lg-image">
                                    <img src="images/product/large-size/6.jpg" alt="product image">
                                </div>
                            </div>
                            <div class="product-details-thumbs slider-thumbs-1">
                                <div class="sm-image"><img src="images/product/small-size/1.jpg"
                                        alt="product image thumb"></div>
                                <div class="sm-image"><img src="images/product/small-size/2.jpg"
                                        alt="product image thumb"></div>
                                <div class="sm-image"><img src="images/product/small-size/3.jpg"
                                        alt="product image thumb"></div>
                                <div class="sm-image"><img src="images/product/small-size/4.jpg"
                                        alt="product image thumb"></div>
                                <div class="sm-image"><img src="images/product/small-size/5.jpg"
                                        alt="product image thumb"></div>
                                <div class="sm-image"><img src="images/product/small-size/6.jpg"
                                        alt="product image thumb"></div>
                            </div>
                        </div>
                        <!--// Product Details Left -->
                    </div>

                    <div class="col-lg-7 col-md-6 col-sm-6">
                        <div class="product-details-view-content pt-60">
                            <div class="product-info">
                                <h2>Today is a good day Framed poster</h2>
                                <span class="product-details-ref">Reference: demo_15</span>
                                <div class="rating-box pt-20">
                                    <ul class="rating rating-with-review-item">
                                        <li><i class="fa fa-star-o"></i></li>
                                        <li><i class="fa fa-star-o"></i></li>
                                        <li><i class="fa fa-star-o"></i></li>
                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                        <li class="review-item"><a href="#">Read Review</a></li>
                                        <li class="review-item"><a href="#">Write Review</a></li>
                                    </ul>
                                </div>
                                <div class="price-box pt-20">
                                    <span class="new-price new-price-2">$57.98</span>
                                </div>
                                <div class="product-desc">
                                    <p>
                                        <span>100% cotton double printed dress. Black and white striped top and
                                            orange high waisted skater skirt bottom. Lorem ipsum dolor sit amet,
                                            consectetur adipisicing elit. quibusdam corporis, earum facilis et
                                            nostrum dolorum accusamus similique eveniet quia pariatur.
                                        </span>
                                    </p>
                                </div>
                                <div class="product-variants">
                                    <div class="produt-variants-size">
                                        <label>Dimension</label>
                                        <select class="nice-select">
                                            <option value="1" title="S" selected="selected">40x60cm</option>
                                            <option value="2" title="M">60x90cm</option>
                                            <option value="3" title="L">80x120cm</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="single-add-to-cart">
                                    <form action="#" class="cart-quantity">
                                        <div class="quantity">
                                            <label>Quantity</label>
                                            <div class="cart-plus-minus">
                                                <input class="cart-plus-minus-box" value="1" type="text">
                                                <div class="dec qtybutton"><i class="fa fa-angle-down"></i>
                                                </div>
                                                <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                            </div>
                                        </div>
                                        <button class="add-to-cart" type="submit">Add to cart</button>
                                    </form>
                                </div>
                                <div class="product-additional-info pt-25">
                                    <a class="wishlist-btn" href="wishlist.html"><i class="fa fa-heart-o"></i>Add to
                                        wishlist</a>
                                    <div class="product-social-sharing pt-25">
                                        <ul>
                                            <li class="facebook"><a href="#"><i class="fa fa-facebook"></i>Facebook</a>
                                            </li>
                                            <li class="twitter"><a href="#"><i class="fa fa-twitter"></i>Twitter</a>
                                            </li>
                                            <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i>Google
                                                    +</a></li>
                                            <li class="instagram"><a href="#"><i
                                                        class="fa fa-instagram"></i>Instagram</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Quick View | Modal Area End Here -->
</div>
<!-- Body Wrapper End Here -->
<!-- jQuery-V1.12.4 -->
<script src="js/vendor/jquery-1.12.4.min.js"></script>
<!-- Popper js -->
<!-- Bootstrap V4.1.3 Fremwork js -->
<script src="js/bootstrap.min.js"></script>
<!-- Meanmenu js -->
<script src="js/jquery.meanmenu.min.js"></script>
<!-- Owl Carousel-2 js -->
<script src="js/owl.carousel.min.js"></script>
<!-- Countdown -->
<script src="js/jquery.countdown.min.js"></script>
<!-- Nice Select js -->
<script src="js/jquery.nice-select.min.js"></script>
<!-- ScrollUp js -->
<script src="js/scrollUp.min.js"></script>
<!-- Main/Activator js -->
<script src="js/main.js"></script>
</body>

</html>