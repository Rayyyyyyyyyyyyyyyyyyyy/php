<?php
session_start();
$product_id=$_POST["id"];
$data=array(
    $product_id=> 1
);
if(!isset($_SESSION["cart"])){
    $_SESSION["cart"]=array();
}
$product_exist=0;
foreach($_SESSION["cart"] as $value){
    if (array_key_exists($product_id, $value)) {
        $product_exist=1;
    }
}
if($product_exist==0){
    array_push($_SESSION["cart"], $data);
}
echo json_encode($data);

?>