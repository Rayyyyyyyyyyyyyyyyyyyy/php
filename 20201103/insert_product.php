<?php
require_once ("db_connect.php"); //引入基本資料檔

$now = date('Y-m-d H:i:s');

$stmt =$conn->prepare("INSERT INTO products(name, intro, category_id, price)
VALUES(?, ?, ?, ?)");

$stmt->bind_param('ssii',
    $name,
    $intro,
    $category_id,
    $price
);

$name="很橘很好吃";
$intro="是橘子";
$category_id=1;
$price=6000;
$stmt->execute();


$name="很綠很迷彩";
$intro="綠光罩頂";
$category_id=1;
$price=5000;
$stmt->execute();

$name="很黃很暴力";
$intro="老司機開車囉";
$category_id=1;
$price=3080;
$stmt->execute();

$name="很藍很憂鬱";
$intro="為賦新辭強說愁";
$category_id=1;
$price=3500;
$stmt->execute();


//$conn->close();



