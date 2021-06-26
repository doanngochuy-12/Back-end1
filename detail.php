<!doctype html>
<html class="no-js" lang="zxx">

<?php
require "config.php";
require "models/db.php";
require "models/product.php";
require "models/manufactures.php";
require "models/protypes.php";
require "models/search.php";

$product = new Product;
$manufactures = new Manufactures;
$protypes = new Protypes;
$search = new Search;

$sp = $product->getThreeFeatureProducts();
$sp1 = $product->getIDProduct();
$sp2 = $manufactures->getManuName();
$sp3 = $protypes->getTypeName();

$id;
if(isset($_GET['id'])){
    $id = $_GET['id'];
}
if(isset($_GET['product'])){
    $product = $_GET['product'];
}
$getItem = $manufactures->getItemHang();


?>

<!-- single-product-normal31:50-->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Single Product Normal || limupa - Digital Products Store eCommerce Bootstrap 4 Template</title>
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
                <!-- Begin Header Top Area -->
               
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
                            <!-- Header Logo Area End Here -->
                            <!-- Begin Header Middle Right Area -->
                            <div class="col-lg-9 pl-0 ml-sm-15 ml-xs-15">
                                <!-- Begin Header Middle Searchbox Area -->
                                <form action="#" class="hm-searchbox">
                                    
                                    <input type="text" placeholder="Enter your search key ...">
                                    <button class="li-btn" type="submit"><i class="fa fa-search"></i></button>
                                </form>
                                <!-- Header Middle Searchbox Area End Here -->
                                <!-- Begin Header Middle Right Area -->
                                <div class="header-middle-right">
                                    <ul class="hm-menu">
                                        <!-- Begin Header Middle Wishlist Area -->
                                        <li class="hm-wishlist">
                                            <a href="wishlist.html">
                                                <span class="cart-item-count wishlist-item-count">0</span>
                                                <i class="fa fa-heart-o"></i>
                                            </a>
                                        </li>
                                        <!-- Header Middle Wishlist Area End Here -->
                                        <!-- Begin Header Mini Cart Area -->
                                        <li class="hm-minicart">
                                            <div class="hm-minicart-trigger">
                                                <span class="item-icon"></span>
                                                
                                            </div>
                                            <span></span>
                                            <div class="minicart">
                                                <ul class="minicart-product-list">
                                                    
                                                </ul>
                                                
                                                <div class="minicart-button">
                                                    <a href="shopping-cart.php" class="li-button li-button-fullwidth li-button-dark">
                                                        <span>View Full Cart</span>
                                                    </a>
                                                    
                                                </div>
                                            </div>
                                        </li>
                                        <!-- Header Mini Cart Area End Here -->
                                    </ul>
                                </div>
                                <!-- Header Middle Right Area End Here -->
                            </div>
                            <!-- Header Middle Right Area End Here -->
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
                                            
                                            
                                            
                                            
                                            <li><a href="#">NHOM 10</a></li>
                                            
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
                            <li class="active">Detail</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Li's Breadcrumb Area End Here -->
            <!-- content-wraper start -->

            <?php

                $arr = $product->getAllFeatureProducts();
                foreach($arr as $value){
                    if($id == $value['id']){
                ?>
            <div class="content-wraper">
                <div class="container">
                    <div class="row single-product-area">
                        <div class="col-lg-5 col-md-6">
                           <!-- Product Details Left -->
                            <div class="product-details-left">
                                <div class="product-details-images slider-navigation-1">
                                    <div class="lg-image">
                                        <img style="width:85%" src="public/images/<?php echo $value['pro_image'] ?>" alt="">
                                    </div>
                                    
                                </div>
                                    
                            </div>
                            <!--// Product Details Left -->
                        </div>

                        <div class="col-lg-7 col-md-6">
                            <div class="product-details-view-content sp-normal-content pt-60">
                                <div class="product-info">
                                    <h2><?php echo $value['name'] ?></h2>
                                    
                                    
                                    <div class="price-box pt-20">
                                        <span class="new-price new-price-2"><?php echo number_format($value['price'])?> VND</span>
                                    </div>
                                    <div class="product-desc">
                                        <p>
                                            <span><?php echo $value['description']?></span>
                                        </p>
                                    </div>
                                    <div class="single-add-to-cart">
                                        <form action="#" class="cart-quantity">
                                            <div class="quantity">
                                                <label>Quantity</label>
                                                <div class="cart-plus-minus">
                                                    <input class="cart-plus-minus-box" value="1" type="text">
                                                    <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                                    <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                                </div>
                                            </div>
                                            <!-- <button class="add-to-cart" type="submit">Add to cart</button> -->
                                            <a style="padding: 30px;" class="add-to-cart" href="shopping-cart.php?id=<?=$value['id']?>">Add to cart</a>
                                        </form>
                                    </div>
                                   
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
            <?php }}?>
            <!-- content-wraper end -->
            <!-- Begin Product Area -->
            
            <!-- Product Area End Here -->
            <!-- Begin Li's Laptop Product Area -->
           
            <!-- Li's Laptop Product Area End Here -->
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
            <!-- Begin Quick View | Modal Area -->
            <div class="modal fade modal-wrapper" id="exampleModalCenter" >
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
                                            <div class="sm-image"><img src="images/product/small-size/1.jpg" alt="product image thumb"></div>
                                            <div class="sm-image"><img src="images/product/small-size/2.jpg" alt="product image thumb"></div>
                                            <div class="sm-image"><img src="images/product/small-size/3.jpg" alt="product image thumb"></div>
                                            <div class="sm-image"><img src="images/product/small-size/4.jpg" alt="product image thumb"></div>
                                            <div class="sm-image"><img src="images/product/small-size/5.jpg" alt="product image thumb"></div>
                                            <div class="sm-image"><img src="images/product/small-size/6.jpg" alt="product image thumb"></div>
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
                                                    <span>100% cotton double printed dress. Black and white striped top and orange high waisted skater skirt bottom. Lorem ipsum dolor sit amet, consectetur adipisicing elit. quibusdam corporis, earum facilis et nostrum dolorum accusamus similique eveniet quia pariatur.
                                                    </span>
                                                </p>
                                            </div>
                                            
                                            <div class="single-add-to-cart">
                                                <form action="#" class="cart-quantity">
                                                    <div class="quantity">
                                                        <label>Quantity</label>
                                                        <div class="cart-plus-minus">
                                                            <input class="cart-plus-minus-box" value="1" type="text">
                                                            <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                                            <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                                        </div>
                                                    </div>
                                                    <button class="add-to-cart" type="submit">Add to cart</button>
                                                </form>
                                            </div>
                                            <div class="product-additional-info pt-25">
                                                <a class="wishlist-btn" href="wishlist.html"><i class="fa fa-heart-o"></i>Add to wishlist</a>
                                                <div class="product-social-sharing pt-25">
                                                    <ul>
                                                        <li class="facebook"><a href="#"><i class="fa fa-facebook"></i>Facebook</a></li>
                                                        <li class="twitter"><a href="#"><i class="fa fa-twitter"></i>Twitter</a></li>
                                                        <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i>Google +</a></li>
                                                        <li class="instagram"><a href="#"><i class="fa fa-instagram"></i>Instagram</a></li>
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

<!-- single-product-normal31:50-->
</html>
