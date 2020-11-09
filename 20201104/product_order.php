<?php
require_once ("db_connect.php"); //引入基本資料檔

$product_id=1;

$product_sql="SELECT * FROM products WHERE id=$product_id";
$result_product= $conn->query($product_sql);

$row_product= $result_product->fetch_assoc();
$product_name = $row_product["name"];


$sql="SELECT user_order.*, products.name AS products_name,products.price 
,users.name AS user_name FROM user_order
JOIN  products ON user_order.product_id = products.id
JOIN users ON user_order.user_id = users.id
WHERE user_order.product_id=$product_id ";

$result = $conn->query($sql);
$total=0;
$total_cost=0;

?>

<!doctype html>
<html lang="en">
<head>
    <title>$product_name</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="py-2"> <?=$product_name?>的訂購資料</div>
    <table class="table table-bordered table-sm">
        <thead>
        <tr>
            <th>訂購日期</th>
            <th>訂購人</th>
            <th>單價</th>
            <th>數量</th>
            <th>小計</th>
        </tr>
        </thead>
        <tbody>
        <?php
        if($result->num_rows>0){
            while ($row = $result->fetch_assoc()){

            ?>
                <tr>
                    <td><?=$row["order_date"]?></td>
                    <td><?=$row["user_id"]?></td>
                    <td><?=$row["price"]?></td>
                    <td><?=$row["amount"]?></td>
                    <?php
                    $total=($row["price"]*$row["amount"]);?>
                    <td><?=$total?></td>
                    <?php $total_cost=$total_cost+$total?>
                </tr>
            <?php   }}?>
        <tr>
            <td></td>

            <td></td>
            <td></td>
            <td></td>
            <td><?=$total_cost?></td>
        </tr>

        </tbody>
    </table>

</div>
</body>
</html>
