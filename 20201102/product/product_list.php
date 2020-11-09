<?php
require_once ("../db_connect.php"); //引入基本資料檔

$sql="SELECT * FROM products";  //* 代表所有資料
$result=$conn->query($sql);
?>
<!doctype html>
<html lang="en">
<head>
    <title>product list</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <table class="table table-bordered table-sm">
        <thead>
        <tr>
            <th>產品名字</th>
            <th>形容</th>
            <th>價格</th>


        </tr>
        </thead>
        <tbody>
        <?php
        if ($result->num_rows>0){
            while ($row=$result->fetch_assoc()){
                echo "<tr>";

                echo "<td>".$row["name"]."</td>";
                echo "<td>".$row["intro"]."</td>";
                echo "<td class='text-right'>".$row["price"]."</td>";

            }
        }
        $conn->close();
        ?>


        </tbody>
    </table>


</div>

</body>
</html>