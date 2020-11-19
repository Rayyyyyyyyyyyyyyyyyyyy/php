<?php
$server_name="localhost";
$user_name="root";
$password="123456";
$db_name="example";

$conn=new mysqli($server_name,$user_name,$password,$db_name);
if($conn->connect_error){
    echo "沒進去";
    die("錯誤".$conn->connect_error);
}



