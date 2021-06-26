<?php



class Search extends Db{
    //Truy van tim kiem theo ten
    function getSearchName($keyword){
        $sql = self::$connection->prepare("SELECT * FROM `products` WHERE `name` LIKE ?");
        $keyword = "%$keyword%";
        $sql->bind_param("s",$keyword);
        $sql->execute();//return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    
    //Xuat ra danh sach ket qua san Pham sau khi TIMM va chia page
    function FindProductsPage($keyword,$page,$perPage){
        $firstLink = ($page-1)*$perPage;
        $sql = self::$connection->prepare("SELECT * FROM products WHERE products.name LIKE ? LIMIT $firstLink,$perPage" );
        $key="%".$keyword."%";
        $sql ->bind_param('s',$keyword);
        $sql->execute();//return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    //Xuat ra danh sach ket qua san Pham sau khi TIMM.
    function FindProducts($keyword){
        $sql = self::$connection->prepare("SELECT * FROM products WHERE products.name LIKE ?" );
        $keyword="%".$keyword."%";
        $sql ->bind_param('s',$keyword);
        $sql->execute();//return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    //Tao Link Chia page result.php
    public static function createPageLinksFindProducts($totalRow, $perPage,$key)
    {
        $output="";
        $numberPage = ceil($totalRow / $perPage);
        for ($i=1; $i <= $numberPage ; $i++) {
            $output.= '<a class="page-link" href="?page=' . $i . '&&key='.$key.'">' . $i ." ". '</a>';
        }
        return $output;
    }
}

    