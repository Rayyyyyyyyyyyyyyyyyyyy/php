<?php
require_once ("db_connect.php"); //引入基本資料檔

$now = date('Y-m-d H:i:s');

$stmt =$conn->prepare("INSERT INTO user_order(product_id, amount, user_id, order_date)
VALUES(?, ?, ?, ?)");

$stmt->bind_param('iiis',
    $product_id,
    $amount,
    $user_id,
    $order_date
);

$product_id=2;
$amount=3;
$user_id=2;
$order_date="2020-10-26";
$stmt->execute();

$product_id=3;
$amount=4;
$user_id=3;
$order_date="2020-10-27";
$stmt->execute();

$product_id=4;
$amount=3;
$user_id=4;
$order_date="2020-10-25";
$stmt->execute();


$product_id=5;
$amount=3;
$user_id=5;
$order_date="2020-10-25";
$stmt->execute();


$product_id=6;
$amount=2;
$user_id=6;
$order_date="2020-10-20";
$stmt->execute();


$product_id=7;
$amount=1;
$user_id=5;
$order_date="2020-10-21";
$stmt->execute();


$product_id=6;
$amount=3;
$user_id=8;
$order_date="2020-10-28";
$stmt->execute();


$product_id=3;
$amount=3;
$user_id=4;
$order_date="2020-10-29";
$stmt->execute();


$product_id=8;
$amount=3;
$user_id=21;
$order_date="2020-10-30";
$stmt->execute();




//$conn->close();



