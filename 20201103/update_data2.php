<?php
require_once ("db_connect.php");



$sql="UPDATE products SET valid = 1";

if($conn->query($sql)===TRUE){
    echo "有了";
}else{
    echo "錯了".$conn->error;
}$conn->close();
