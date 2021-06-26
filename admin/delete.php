<?php
require "config.php";
require "models/db.php";
require "models/product.php";
require "models/manufactures.php";
require "models/protypes.php";
$product = new Product;
$manufactures = new Manufactures;
$protypes = new Protypes;

if(isset($_GET['id'])){
    $id =$_GET['id'];
    //goi phuong thuc xoa id
    $product->deleteProductById($id);
    echo "xoa Thanh cong";
    echo '<script language="javascript">';
	echo 'alert("Xóa Thành Công !!!")';
	echo '</script>';
    header('location:index.php');
}
if(isset($_GET['keymanu']) && $manufactures->KiemTraExit($_GET['keymanu'])==false){
    $id =$_GET['keymanu'];
    //goi phuong thuc xoa id
    $manufactures->deleteManufacturesById($id);
    echo '<script language="javascript">';
	echo 'alert("Xóa Thành Công !!!")';
	echo '</script>';
    header('location:manufactures.php');
}
if(isset($_GET['keytype'])&& $protypes->KiemTraExit($_GET['keytype'])==false){
    $id =$_GET['keytype'];
    //goi phuong thuc xoa id
    $protypes->deleteProtypesById($id);
    echo '<script language="javascript">';
	echo 'alert("Xóa Thành Công !!!")';
	echo '</script>';
    header('location:protypes.php');
}
else{
    echo '<script language="javascript">';
    echo 'alert("Xóa Không Thành Công !!!")';
   

    echo '</script>';
    echo '<a href="javascript:history.go(-1)">Quay Lại...</a>';
}