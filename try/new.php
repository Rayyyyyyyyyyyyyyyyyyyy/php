<?php
$host = "localhost";
$user ="root";
$passwd ="";
$db_name = "members";

$connect = new mysqli($host, $user, $passwd,$db_name);



//if($connect->connect_error){
//    die("失敗". $connect->connect_error);
//
//}
//echo "成功";
//
