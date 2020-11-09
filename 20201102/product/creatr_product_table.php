<?php
require_once("../db_connect.php"); //引入基本資料檔
$sql="CREATE TABLE products(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    intro VARCHAR(3000),
    category_id INT(3),
    price INT(6)
)";
if($conn->query($sql)===TRUE){
    echo "有了";
}else{
    echo "沒有".$conn->error;
}$conn->close();
