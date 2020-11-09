<?php
require_once ("db_connect.php");
$page=1;
$item_per_page=5;
$start=($page-1)*$item_per_page;

$sql="SELECT * FROM users WHERE valid=1 LIMIT $start,$item_per_page";
//第一個數字 從第幾筆資料開始呈現
//第二個數字 一頁要呈現幾筆資料
$result = $conn->query($sql);
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
<table class="table table-bordered">
    <thead>
    <tr>
        <th>學號</th>
        <th>姓名</th>
        <th>身高(CM)</th>
        <th>體重</th>
        <th>電話</th>

    </tr>
    </thead>
    <tbody>
    <?php
    if ($result->num_rows>0){
        while ($row=$result->fetch_assoc()){
            echo "<tr>";
            echo "<td>" .$row["id"] ."</td>";
            echo "<td>".$row["name"]."</td>";
            echo "<td>".$row["height"]."</td>";
            echo "<td>".$row["weight"]."</td>";
            echo "<td>".$row["phone"]."</td>";

        }
    }
    $conn->close();
    ?>


    </tbody>

</table>

</body>
</html>