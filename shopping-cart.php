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
      header("Location:shopping-cart.php");
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
<!doctype html>
<html class="no-js" lang="zxx">

<!-- shopping-cart31:32-->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Shopping Cart || limupa - Digital Products Store eCommerce Bootstrap 4 Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
        <!-- Material Design Iconic Font-V2.2.0 -->
        <link rel="stylesheet" href="css/material-design-iconic-font.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <!-- Font Awesome Stars-->
        <link rel="stylesheet" href="css/fontawesome-stars.css">
        <!-- Meanmenu CSS -->
        <link rel="stylesheet" href="css/meanmenu.css">
        <!-- owl carousel CSS -->
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <!-- Slick Carousel CSS -->
        <link rel="stylesheet" href="css/slick.css">
        <!-- Animate CSS -->
        <link rel="stylesheet" href="css/animate.css">
        <!-- Jquery-ui CSS -->
        <link rel="stylesheet" href="css/jquery-ui.min.css">
        <!-- Venobox CSS -->
        <link rel="stylesheet" href="css/venobox.css">

        <link rel="stylesheet" href="css\styleCart.css">

        <!-- Nice Select CSS -->
        <link rel="stylesheet" href="css/nice-select.css">
        <!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="css/magnific-popup.css">
        <!-- Bootstrap V4.1.3 Fremwork CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Helper CSS -->
        <link rel="stylesheet" href="css/helper.css">
        <!-- Main Style CSS -->
        <link rel="stylesheet" href="style.css">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="css/responsive.css">
        <!-- Modernizr js -->
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
        <!-- Begin Body Wrapper -->
        <div class="body-wrapper">
            <!-- Begin Header Area -->
            <header>
                
                <!-- Header Top Area End Here -->
                <!-- Begin Header Middle Area -->
                <div class="header-middle pl-sm-0 pr-sm-0 pl-xs-0 pr-xs-0">
                    <div class="container">
                        <div class="row">
                            <!-- Begin Header Logo Area -->
                            <div class="col-lg-3">
                                <div class="logo pb-sm-30 pb-xs-30">
                                    <a href="index.php">
                                        <img src="images/menu/logo/1.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <!-- Header Middle Area End Here -->
                <!-- Begin Header Bottom Area -->
                <div class="header-bottom mb-0 header-sticky stick d-none d-lg-block d-xl-block">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- Begin Header Bottom Menu Area -->
                                <div class="hb-menu">
                                    <nav>
                                        <ul>
                                            <li class="dropdown-holder"><a href="index.php">Home</a>
                                                
                                            </li>
                                            <li class="catmenu-dropdown megamenu-holder"><a href="shop-left-sidebar.html">Shop</a>
                                               
                                            </li>
                                            
                                           
                                        </ul>
                                    </nav>
                                </div>
                                <!-- Header Bottom Menu Area End Here -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Header Bottom Area End Here -->
                <!-- Begin Mobile Menu Area -->
                <div class="mobile-menu-area d-lg-none d-xl-none col-12">
                    <div class="container"> 
                        <div class="row">
                            <div class="mobile-menu">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Mobile Menu Area End Here -->
            </header>

            <!-- Header Area End Here -->
            <!-- Begin Li's Breadcrumb Area -->
            <div class="breadcrumb-area">
                <div class="container">
                    <div class="breadcrumb-content">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li class="active">Shopping Cart</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="Shopping-cart-area pt-60 pb-60">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <form action="#">
                                <div class="table-content table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="li-product-remove">remove</th>
                                                <th class="li-product-thumbnail">images</th>
                                                <th class="cart-product-name">Product</th>
                                                <th class="li-product-price">Unit Price</th>
                                                <th class="li-product-quantity">Quantity</th>
                                                <th class="li-product-subtotal">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        <?php
                                            $tong = 0;
                                            if($_SESSION['cart']!=null)
                                            {
                                            foreach($arr as $item)
                                            {
                                                foreach($cart as $key => $value){
                                                if($item["id"]==$key)
                                            {
                                                // echo "ID:".$id;
                                                // var_dump($cart);
                                                // var_dump($item);
                                        ?>
                                            <tr>
                                                <td class="li-product-remove"><a href="shopping-cart.php?remove=<?= $item['id']?>"><i class="fa fa-times"></i></a></td>
                                                <td class="li-product-thumbnail"><a href="#"><img style="width:20%" src="public/images/<?php echo $item["pro_image"]?>" alt="Li's Product Image"></a></td>
                                                <td class="li-product-name"><a href="#"><?=$item['name']?></a></td>
                                                <td class="li-product-price"><span class="amount"><?= number_format( $item['price'])." VND" ;
                                                                                $tong += $item['price'] * $value;?>
                                                                            </span>
                                                </td>
                                                <td class="quantity">
                                                    <label>Quantity</label>
                                                    <div class="cart-plus-minus">
                                                        <input class="cart-plus-minus-box" value="<?= $value ?>"  type="text">
                                                        <span class="dec qtybutton" ><a  href="shopping-cart.php?tru=1&idpr=<?= $item['id'] ?>"><i class="fa fa-angle-down"></i></a></span>
                                                        <div class="inc qtybutton" ><a href="shopping-cart.php?add=1&idpr=<?= $item['id'] ?>"><i class="fa fa-angle-up"></i></a></div>
                                                    </div>
                                                    
                                                </td>
                                                <td class="product-subtotal"><span class="amount"><?= number_format($item['price'] * $value). " VND" ; ?></span></td>
                                                
                                            </tr>
                                            
                                        <?php }}}}else
                                            {
                                                echo "<h2 class='subtotal'>Cart is empty</h2>";
                                            } 
                                        ?>
                                        
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="coupon-all">
                                            <div class="coupon">
                                                
                                                <input class="button" name="apply_coupon" value="    " type="submit">
                                            </div>
                                            <div class="coupon2">
                                                <input class="button" name="update_cart" value="     " type="submit">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5 ml-auto">
                                        <div class="cart-page-total">
                                            <h2>Cart totals</h2>
                                            
                                            <ul>
                                                <li>Total <span><?= number_format($tong). " VND" ?></span></li>
                                            </ul>
                                            <a href="#">Proceed to checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
           
  </div>

            

            <!--Shopping Cart Area End-->
            <!-- Begin Footer Area -->
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
                                        53 Võ Văn Ngân / Cao Đảng Công Nghệ thủ Đức
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
                                        <li><a href="#">Điện thoại</a></li>
                                        <li><a href="#">Tai nghe</a></li>
                                        <li><a href="#">Loa</a></li>
                                        <li><a href="#">Sạc dự phòng</a></li>
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
                                        <li><a href="#">Đoàn Ngọc Huy</a></li>
                                        <li><a href="#">Văn Công Nam</a></li>
                                        <li><a href="#">Trần Lý Thủy Tiên</a></li>
                                        <li><a href="#">Đỗ Minh Tú</a></li>
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
        </div>
        <!-- Body Wrapper End Here -->
        <!-- jQuery-V1.12.4 -->
        <script src="js/vendor/jquery-1.12.4.min.js"></script>
        <!-- Popper js -->
        <script src="js/vendor/popper.min.js"></script>
        <!-- Bootstrap V4.1.3 Fremwork js -->
        <script src="js/bootstrap.min.js"></script>
        <!-- Ajax Mail js -->
        <script src="js/ajax-mail.js"></script>
        <!-- Meanmenu js -->
        <script src="js/jquery.meanmenu.min.js"></script>
        <!-- Wow.min js -->
        <script src="js/wow.min.js"></script>
        <!-- Slick Carousel js -->
        <script src="js/slick.min.js"></script>
        <!-- Owl Carousel-2 js -->
        <script src="js/owl.carousel.min.js"></script>
        <!-- Magnific popup js -->
        <script src="js/jquery.magnific-popup.min.js"></script>
        <!-- Isotope js -->
        <script src="js/isotope.pkgd.min.js"></script>
        <!-- Imagesloaded js -->
        <script src="js/imagesloaded.pkgd.min.js"></script>
        <!-- Mixitup js -->
        <script src="js/jquery.mixitup.min.js"></script>
        <!-- Countdown -->
        <script src="js/jquery.countdown.min.js"></script>
        <!-- Counterup -->
        <script src="js/jquery.counterup.min.js"></script>
        <!-- Waypoints -->
        <script src="js/waypoints.min.js"></script>
        <!-- Barrating -->
        <script src="js/jquery.barrating.min.js"></script>
        <!-- Jquery-ui -->
        <script src="js/jquery-ui.min.js"></script>
        <!-- Venobox -->
        <script src="js/venobox.min.js"></script>
        <!-- Nice Select js -->
        <script src="js/jquery.nice-select.min.js"></script>
        <!-- ScrollUp js -->
        <script src="js/scrollUp.min.js"></script>
        <!-- Main/Activator js -->
        <script src="js/main.js"></script>
    </body>

<!-- shopping-cart31:32-->
</html>
