<?php
require_once ("db_connect.php"); //引入基本資料檔

$sql="SELECT * FROM products WHERE price=(SELECT MIN(price) FROM products)";
$result =$conn->query($sql);

if($result->num_rows > 0){
   echo "最低單價的產品: <br>";
    while($row = $result->fetch_assoc()){
        echo $row["name"]." 價錢:  $".$row["price"]."<br>";

    }

}else{

}
