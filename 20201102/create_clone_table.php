<?php
require_once ("db_connect.php"); //引入基本資料檔


$sql="CREATE TABLE new_users LIKE users";
if($conn->query($sql)===TRUE){
    echo "成功";
}else{
    echo "沒有阿".$conn->error;
}

//創建新的資料表 欄位相同



$sql="INSERT new_users SELECT * FROM users";
if($conn->query($sql)===TRUE){
    echo "成功";
}else{
    echo "沒有阿".$conn->error;
}
//資料表內容 複製

$conn->close();




?>