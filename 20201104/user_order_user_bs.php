<?php
require_once ("db_connect.php"); //引入基本資料檔

$data="2020-10-28";

$sql="SELECT user_order.*, products.name AS products_name,products.price,
users.name AS user_name FROM user_order
JOIN  products ON user_order.product_id = products.id
JOIN users ON user_order.user_id = users.id
WHERE user_order.order_date='$data'
  ";


$result = $conn->query($sql);
$row = $result->fetch_assoc();
$total=0;
$total_cost=0;


?>
<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="py-2">
<h3><?=$data?></h3>
    </div>
    <table class="table table-bordered table-sm">
        <thead>
        <tr>
            <th>品項</th>
            <th>訂購者</th>
            <th>單價</th>
            <th>數量</th>
            <th>小計</th>
        </tr>
        </thead>
        <tbody>
        <?php if($result->num_rows>0){
        while ($row = $result->fetch_assoc()){
        ?>
        <tr>
            <td><?=$row["products_name"]?></td>
            <td><?=$row["user_name"]?></td>
            <td><?=$row["price"]?></td>
            <td><?=$row["amount"]?></td>
            <?php $total=($row["price"]*$row["amount"]);?>
            <td><?=$total?></td>
        </tr>
            <?php $total_cost=$total_cost+$total?>
        <?php   }}?>
        </tbody>
    </table>
    <div class="text-right">
        總計: <?=$total_cost?> $
    </div>
</div>

</body>
</html>