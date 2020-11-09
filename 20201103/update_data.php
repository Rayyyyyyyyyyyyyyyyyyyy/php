<?php
require_once ("db_connect.php");


$id=7;

$sql="UPDATE users SET phone = '0900455646546546' WHERE id=$id";

if($conn->query($sql)===TRUE){
    echo "有了";
}else{
    echo "錯了".$conn->error;
}$conn->close();
