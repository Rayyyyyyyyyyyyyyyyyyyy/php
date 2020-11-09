<?php
require_once ("new.php"); //引入基本資料檔

$sql="CREATE TABLE member(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR (30) NOT NULL,
pas VARCHAR(12) NOT NULL,
sex INT(1) NOT NULL,
birth_date DATE NOT NULL,
age INT(4) NOT NULL,
phone VARCHAR (30) NOT NULL,
email VARCHAR (50) NOT NULL,
area VARCHAR (200) NOT NULL,
job VARCHAR (200) NOT NULL,
hobby VARCHAR (200) NULL,
inte FLOAT NOT NULL,
valid INT(1) NOT NULL
)";

if($connect->query($sql)===TRUE){
    echo "users建立成功";
}else{
    echo "錯誤".$connect->error;
}
$connect->close();



?>