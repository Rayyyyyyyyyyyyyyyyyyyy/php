<?php
require_once ("db_connect.php"); //引入基本資料檔
$now=date('Y-m-d H:i:s');


$sql="
INSERT INTO users(name, height, weight, phone, email, create_time, valid, birth_date)
VALUES 
('MMMMMark', 190, 75, '0978444560', 'mark@test.com', '$now' , 1, '1986-11-15'),
('NNNNana', 150, 45, '0978442160', 'nana@test.com', '$now' , 1, '1999-10-28'),
('JJJJjack', 180, 65, '097568742160', 'Jack@test.com', '$now' , 1, '2000-01-01')
";


if($conn->multi_query($sql)===TRUE){
    $last_id=$conn->insert_id;
    echo "進去了 , 編號是 $last_id";
}else{
    echo "歪了.".$sql."<br>".$conn->error;
}



?>