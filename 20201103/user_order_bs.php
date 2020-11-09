<?php
require_once ("db_connect.php"); //引入基本資料檔

$user_id=1;

$user_sql="SELECT * FROM users WHERE id=$user_id";
$result_user= $conn->query($user_sql);
while ($row_user = $result_user->fetch_assoc()){
    $user_name = $row_user["name"];
}



$sql="SELECT user_order.*, products.name AS products_name,products.price 
FROM user_order
JOIN  products ON user_order.product_id = products.id
WHERE user_order.user_id=$user_id ";

$result = $conn->query($sql);
$row = $result->fetch_assoc();
$total=0;
$total_cost=0;

?>

<!doctype html>
<html lang="en">
<head>
    <title><?=$user_name?></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="contauner">
    <h3><?=$user_name. "的購買紀錄"?></h3>
    <table class="table table-bordered table-sm">
        <thead>
        <tr>
            <th>品項</th>
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
            <td><?=$row["price"]?></td>
            <td><?=$row["amount"]?></td>
            <?php $total=($row["price"]*$row["amount"]);?>
            <td><?=$total?></td>
            <?php $total_cost=$total_cost+$total?>
        </tr>
     <?php   }}?>
       <tr>
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
