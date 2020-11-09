<?php


require_once ("new.php"); //引入基本資料檔


$stmt =$connect->prepare("INSERT INTO area(name) VALUES(?)");

$stmt->bind_param('s', $name);

$name="台北市";
$stmt->execute();
$name="新北市";
$stmt->execute();
$name="桃園市";
$stmt->execute();
$name="台中市";
$stmt->execute();
$name="台南市";
$stmt->execute();
$name="高雄市";
$stmt->execute();
$name="基隆市";
$stmt->execute();
$name="新竹市";
$stmt->execute();
$name="新竹縣";
$stmt->execute();
$name="嘉義市";
$stmt->execute();
$name="嘉義縣";
$stmt->execute();
$name="苗栗縣";
$stmt->execute();
$name="彰化縣";
$stmt->execute();
$name="南投縣";
$stmt->execute();
$name="雲林縣";
$stmt->execute();
$name="屏東縣";
$stmt->execute();
$name="宜蘭縣";
$stmt->execute();
$name="花蓮縣";
$stmt->execute();
$name="台東縣";
$stmt->execute();
$name="澎湖縣";
$stmt->execute();
$name="金門縣";
$stmt->execute();
$name="連江縣";
$stmt->execute();
