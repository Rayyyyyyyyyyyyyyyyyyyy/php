<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <title>cart</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container py-2">
            <table class="table table-bordered table-sm">
            <thead>
                <tr>
                <th>產品名稱</th>
                <th>單價</th>
                <th>數量</th>
                </tr>
            </thead>
          <?php
          require_once "PDO_connect.php";
          foreach($_SESSION["cart"] as $prodcut){
            foreach ($prodcut as $key => $value) {
                echo "<tr>";
                $sql="SELECT * FROM product WHERE id=?";
                $stmt=$db_host->prepare($sql);
                $stmt->execute([$key]);
                $row = $stmt->fetch();
                echo "<td>".$row["name"]."</td>";
                echo "<td class='text-right'>$".$row["price"]."</td>";
                echo "<td class='text-right'>".$value."</td>";
            }
          }  
          ?>
          </table>
          <div class="py-2 text-right">
            <a class="btn btn-info" href="pay.php">結帳</a>
          </div>
      </div>
    
  </body>
</html>