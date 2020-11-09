<?php
//$server_name="localhost";
//$user_name="root";
//$password="sl0c1219";
//$db_name="example";
//$conn=new mysqli($server_name,$user_name,$password,$db_name);
//if($conn->connect_errno){
//    die("錯誤".$conn->connect_error);
//}
require_once ("db_connect.php"); //引入基本資料檔


$sql="CREATE TABLE users(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
height FLOAT ,
weight FLOAT ,
name VARCHAR (30) NOT NULL,
phone VARCHAR (30),
email VARCHAR (50),
create_time DATETIME
)";
if($conn->query($sql)===TRUE){
    echo "users建立成功";
}else{
    echo "錯誤".$conn->error;
}
$conn->close();



?>