<?php
//require_once ("db_connect.php");

$sql="DROP TABLE users";

if($conn->query($sql)===TRUE){
    echo "成功刪除";
}else{
    echo "它還在". $conn->error;
}


//不要亂用刪除

?>

