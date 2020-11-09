<?php
require_once ("new.php"); //引入基本資料檔

$sql="CREATE TABLE hobby(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR (30) NOT NULL

)";

if($connect->query($sql)===TRUE){
    echo "users建立成功";
}else{
    echo "錯誤".$connect->error;
}
$connect->close();



