<?php
require_once ("db_connect.php");


$id=10;

$sql="UPDATE users SET valid = 0 WHERE id=$id";

if($conn->query($sql)===TRUE){
    echo "有了";
}else{
    echo "錯了".$conn->error;
}$conn->close();
