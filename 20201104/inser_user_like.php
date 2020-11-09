<?php
require_once ("db_connect.php"); //引入基本資料檔



$stmt =$conn->prepare("INSERT INTO user_like(
product_id, user_id)
VALUES(?, ?)");

$stmt->bind_param('ii',
    $product_id,
    $user_id,
  );

$product_id="1";
$user_id="2";

$stmt->execute();

$product_id="2";
$user_id="3";
$stmt->execute();

$product_id="4";
$user_id="5";
$stmt->execute();

$product_id="6";
$user_id="8";
$stmt->execute();

$product_id="7";
$user_id="5";
$stmt->execute();

$conn->close();
