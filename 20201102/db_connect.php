<?php
$server_name="localhost";
$user_name="root";
$password="sl0c1219";
$db_name="example";

$conn=new mysqli($server_name,$user_name,$password,$db_name);
if($conn->connect_error){
    die("錯誤".$conn->connect_error);
}
//else{
//    echo "成功";
//}
//





?>