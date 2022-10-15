<?php
include "./model/category.php";
include "./model/product.php";
include "./model/pdo.php";

function load_one_product(){
    $id_pro = $_GET['id_pro'];
    $oneproduct_dt = loadone_product($id_pro);
    echo extract($oneproduct_dt);
    $name_pro_short = (strlen($name_pro) < 20) ? substr($name_pro, 0, 20) : (substr($name_pro, 0, 20) . '...');
    $pr2 = (isset($price_sale)) ? ('$' . $price) : "";
    $pr = (isset($price_sale)) ? $price_sale : $price;
    // return $name_pro_short, $pr2, $pr;
}
?>