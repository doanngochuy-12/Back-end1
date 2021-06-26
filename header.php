
<!doctype html>
<html lang="en">
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

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home Version Two || limupa - Digital Products Store ECommerce Bootstrap 4 Template</title>
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

    <link rel="stylesheet" href="css/style.css">

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
                            <form action="result.php" method="get" class="hm-searchbox">
                                <select class="nice-select select-search-category">
                                    <option value="#">All</option>
                                    
                                </select>
                                <input type="text" placeholder="Enter your search key ..." name="keyword" />
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
                                    
                                    <li class="hm-minicart" >
                                        <div class="hm-minicart-triggder" style="padding-top: 20px;">
                                            <a  href="shopping-cart.php">
                                                <span class="item-icon"></span>
                                            </a>
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
            <div class="header-bottom header-sticky d-none d-lg-block">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Begin Header Bottom Menu Area -->
                            <div class="hb-menu hb-menu-2 d-xl-block">
                                <nav>
                                    <ul>
                                        <li><a href="index.php">Home</a></li>
                                        <li class="megamenu-holder"><a href="shop-left-sidebar.html">Shop</a>
                                        </li>
                                        <li class="dropdown-holder"><a href="blog-left-sidebar.html">Blog</a>
                 
                                        </li>
                                        <li class="megamenu-static-holder"><a href="index.php">Products</a>
                                            <ul class="megamenu hb-megamenu">
                                                <?php
                                                    foreach($sp3 as $value){                                          
                                                ?>
                                                <li><a href="categories.php?product=<?php echo $value['type_id'] ?>"><?php echo $value['type_name'] ?></a></li>
                                                <?php }?>
                                            </ul>
                                        </li>
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="./Login/index.php">Login</a></li>
                                        
                                       
                                        <!-- Header Bottom Menu Information Area End Here -->
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
        <!-- Begin Slider With Category Menu Area -->
        <div class="slider-with-banner">
            <div class="container">
                <div class="row">
                    <!-- Begin Category Menu Area -->
                    <div class="col-lg-3">
                        <!--Category Menu Start-->
                        <div class="category-menu" style="margin-top: 60px;">
                            <div class="category-heading">
                                <h2 class="categories-toggle"><span>categories</span></h2>
                            </div>
                            <div id="cate-toggle" class="category-menu-list" style="padding-left: 12px; color: black;  font-style: italic; font-family: Comic Sans MS;">
                                <?php
                                foreach($sp2 as $value){
                                ?>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><a href="categories.php?id=<?php echo $value['manu_id']?>">
                                        <?php echo $value['manu_name']?></a></h4>
                                    </div>
                                </div>
                                <?php  } ?>
                            </div>
                        </div>
                        <!--Category Menu End-->
                    </div>
                    <!-- Category Menu Area End Here -->
                    