<?php
session_start();
require_once "PDO_connect.php";
date_default_timezone_set("Asia/Taipei");
//要替換成使用者登入資料
$userId=1;
$sql = "INSERT INTO user_order_product (user_id, order_time) VALUES (?, ?)";
$stmt = $db_host->prepare($sql);
$stmt->execute([$userId, date("Y-m-d H:i:s")]);
$order_id = $db_host->lastInsertId();
foreach($_SESSION["cart"] as $prodcut){
    foreach ($prodcut as $key => $value) {
        $sql = "INSERT INTO user_order_product_detail (order_id, product_id, amount) VALUES (?, ?, ?)";
        $stmt = $db_host->prepare($sql);
        $stmt->execute([$order_id, $key, $value]);
    }
}
unset($_SESSION["cart"]);
?>