<?php
require "config.php";
require "models/db.php";
require "models/product.php";
$product = new Product;

//Goi phuong thuc them san pham
$name = $_POST['name'];
$manu_id = $_POST['manu_id'];
$type_id = $_POST['type_id'];
$price = $_POST['price'];
$pro_image = $_FILES['fileUpload']['name'];
$description = $_POST['description'];
$feature = $_POST['feature'];
$product->addProduct($name,$manu_id,$type_id,$price,$pro_image,$description,$feature);
//Upload hinh
$target_dir = "../images/";
$target_file = $target_dir . basename($_FILES["fileUpload"]["name"]);
move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $target_file);
header('location:index.php');