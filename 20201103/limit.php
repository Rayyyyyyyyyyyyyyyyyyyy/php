<?php
require_once ("db_connect.php");

$sql="SELECT * FROM users WHERE valid=1 ORDER BY name DESC LIMIT 8 ";
$result = $conn->query($sql);

if ($result->num_rows>0){
   while($row=$result->fetch_assoc()){
    echo $row["name"]."<br>";
   }
}else{
    "錯了".$conn->error;
}
$conn->close();

//跑出4筆資料
//可以配合條件