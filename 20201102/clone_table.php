<?php
require_once ("db_connect.php"); //引入基本資料檔


//把舊的資料表複製到新的去

$sql="INSERT new_users SELECT * FROM users";
if($conn->query($sql)===TRUE){
    echo "成功";
}else{
    echo "沒有阿".$conn->error;
}

$conn->close();
//關閉連結

?>