<?php
require "config.php";
require "models/db.php";
require "models/product.php";
$product = new Product;
$arr= $product->getAllProducts();
if(isset($_GET['remove']))
{
    unset($_SESSION['cart'][$_GET['remove']]);
}

if(isset($_GET['add'])&&isset($_GET['idpr']))
{
  @$_SESSION['cart'][$_GET['idpr']]=$_SESSION['cart'][$_GET['idpr']]+1;
}
if(isset($_GET['tru'])&&isset($_GET['idpr']))
{
    if(@$_SESSION['cart'][$_GET['idpr']]==0)
    {    
      unset($_SESSION['cart'][$_GET['idpr']]);
      header("Location:cart.php");
    }
    else
    {
      $_SESSION['cart'][$_GET['idpr']]=$_SESSION['cart'][$_GET['idpr']]-1;
    }
}
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    if(isset($_SESSION['cart'][$id]))
    {
        $_SESSION['cart'][$id]+=1;
    }
    else
    {
        $_SESSION['cart'][$id]=1;
    }
}
if(isset($_SESSION['cart']))
{
    $cart = $_SESSION['cart'];
}
?>
  <header id="site-header">
    <div class="container">
      <h1>Shopping cart <span>[</span> <em><a href="index.php" target="_blank">Shopping Mobile</a></em> <span class="last-span is-open">]</span></h1>
    </div>
    <link rel="stylesheet" href="css\styleCart.css">
  </header>

  <div class="container">

    <section id="cartaf"> 
    <?php
     $tong =0;
    if($_SESSION['cart']!=null)
    {
    foreach($arr as $item)
    {
        foreach($cart as $key => $value)
        {
        if($item["id"]==$key)
        {
           
    ?>
      <article class="product">
        <header>
          <a class="remove" href ="cart.php?remove=<?=$key?> ">
           <img src="images/<?php echo $item["pro_image"]?>">

            <h3>Remove product</h3>
          </a>
        </header>

        <div class="content">

          <h1><?=$item['name']?></h1>

          <?= substr($item['description'],0,100)."..."?>
          <div title="You have selected this product to be shipped in the color yellow." style="top: 0" class="color yellow"> </div>
        </div>

        <footer class="content">
        <span class="qt-minus"><a href="cart.php?tru=1&idpr=<?= $item['id']?>">-</a></span>
          <span class="qt"><?= $value?></span>
          <span class="qt-plus" href=""> <a href="cart.php?add=1&idpr=<?= $item['id']?>">+</a></span>
          <h2 class="full-price">
          <?= number_format( $item['price'])." đ" ;
            $tong+=$item['price']*$value;
          ?>
          </h2>
          <h2 class="price">
            Price:
          </h2>
        </footer>
      </article>
      <?php }}}}else
      {
          echo "<h2 class='subtotal'>GIỎ HÀNG TRỐNG !!! </h2>"; 
      } ?>
    </section>
  </div>
  <footer id="site-footer">
    <div class="container clearfix">
      <div class="left">
        <h2 class="subtotal">Nhóm 4 </h2>
        <h3 class="tax">Đỗ Đăng Hòa </h3>
        <h3 class="shipping">Nguyễn Ngọc Gia Huy </h3>
      </div>

      <div class="right">
      <?php
      ?>
        <h1 class="total">Total: <span><?= number_format($tong) ?></span> đ</h1>
        <a class="btn" href ="billinfo.php">Checkout</a>
        <a href=""><img src="./images/visa.png"  style="width:100px;height:100px; " alt=""></a>
        <a href=""><img src="./images/master.png"  style="width:100px;height:100px; " alt=""></a>

        <a href=""><img src="./images/icon-mock.jpg"  style="width:100px;height:100px; " alt=""></a>

        
      </div>
    </div>
  </footer>
