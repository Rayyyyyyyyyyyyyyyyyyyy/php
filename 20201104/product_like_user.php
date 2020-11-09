<?php
require_once ("db_connect.php"); //引入基本資料檔


$product_id=1;

$product_sql = "SELECT * FROM products WHERE id=$product_id";
$result_product = $conn->query($product_sql);
while ($row_product = $result_product->fetch_assoc()){
    $product_name = $row_product["name"];
}




$sql="SELECT user_like.*,users.name AS user_name FROM user_like
JOIN  users ON user_like.user_id = users.id
WHERE user_like.product_id = $product_id
";
$result =$conn->query($sql);

echo "<h3>".$product_name."的收藏</h3>";

if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo $row["user_name"]."<br>";
    }
}