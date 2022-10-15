<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include "./model/pdo.php";
include "./model/product.php";
include "./model/category.php";
// include "./controller/category.php";
// include "./controller/product.php";

if(isset($_GET['opt'])){
    $opt = $_GET['opt'];
}else{
    $opt = '';
}

switch ($opt) {
    case 'detail_pro':
        $id_pro = $_GET['id_pro'];
        $oneproduct_dt = loadone_product($id_pro);
        extract($oneproduct_dt);
        $name_pro_short = (strlen($name_pro) < 20) ? substr($name_pro, 0, 20) : (substr($name_pro, 0, 20) . '...');
        $pr2 = (isset($price_sale)) ? ('$' . $price) : "";
        $pr = (isset($price_sale)) ? $price_sale : $price;
        include "./view/detail_pro.php";
        break;

    case 'shop':
        $list_product = load_product('','');
        include "./view/shop.php";
        break;

    default:
        $list_product_new = load_product_new();
        $list_product_best = load_product_best();
        include "./view/home.php";
        break;
}
?>