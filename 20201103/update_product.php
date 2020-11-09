<?php
require_once ("db_connect.php");

$id=4;
$sql="UPDATE products SET category_id=2 WHERE id=$id";

if($conn->query($sql)===TRUE){
    echo "有了";
}else{
    echo "錯了".$conn->error;
}
$conn->close();
