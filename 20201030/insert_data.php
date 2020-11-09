<?php
require_once ("db_connect.php"); //引入基本資料檔
$now=date('Y-m-d H:i:s');


$sql="INSERT INTO users(name,height, weight, phone, email, create_time, valid, birth_date)
VALUES ('Ma', 158, 45, '097845560', 'ma@test.com', '$now' , 1, '1995-01-18')";

if($conn->query($sql)===TRUE){
    $last_id=$conn->insert_id;
    echo "進去了 , 編號是 $last_id";
}else{
    echo "歪了".$sql."<br>".$conn->error;
}



?>