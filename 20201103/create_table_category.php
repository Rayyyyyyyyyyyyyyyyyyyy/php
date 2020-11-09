<?php
require_once ("db_connect.php");


$sql="CREATE TABLE category(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR (20) NOT NULL 

)";
if($conn->query($sql)===TRUE){
    echo "成功";
}else{
    echo "錯誤".$conn->error;
}
$conn->close();



?>