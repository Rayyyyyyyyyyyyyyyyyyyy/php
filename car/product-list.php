<?php
require_once "PDO_connect.php";

$sql = "SELECT * FROM product";
$stmt= $db_host->prepare($sql);
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
<!doctype html>
<html lang="en">
  <head>
    <title>Product List</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container py-2">
      <div class="row">
        <?php foreach($rows as $row)
        {
        ?>
            <div class="col-md-3">
                <div class="card p-2 mb-3">
                    <h3 class="h4"><?=$row["name"]?></h3>
                    <div>$<?=$row["price"]?></div>
                    <button class="btn btn-info btn-block" onclick="addCart(<?=$row["id"]?>)">加到購物車</button>
                </div>
            </div>
        <?php } ?>
      </div>  
      <div class="py-2 text-center"><a class="btn btn-info" href="cart.php">前往結帳</a></div>
      </div>
      <script
			  src="https://code.jquery.com/jquery-3.5.1.min.js"
			  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
			  crossorigin="anonymous"></script>
        <script>
            function addCart(id){
                let productId=id;
                $.ajax({
                method: "POST",
                url: "add-cart.php",
                dataType: "json",
                data: { id: productId }
                })
                .done(function( response ) {
                    console.log(response)

                }).fail(function( jqXHR, textStatus ) {
                    console.log( "Request failed: " + textStatus );
                });

            }
        </script>
  </body>
</html>