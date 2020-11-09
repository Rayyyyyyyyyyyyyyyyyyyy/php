<?php
require_once ("db_connect.php"); //引入基本資料檔
$id=6;
$sql="SELECT name, height, weight, phone, email FROM users WHERE id=$id";  //* 代表所有資料
$result=$conn->query($sql);

?>


<!doctype html>
<html lang="en">
<head>
    <title>User card</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <!--            <div class="col-md-8">-->
        <!--            </div>-->
        <aside class="col-md-4">
            <div class="card">
<?php
if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
        ?>
                <div class="card-body">
                    <h5 class="card-title"><?= $row["name"] ?></h5>
                    <ul class="list-unstyled">
                        <li>身高: <?=$row["height"]?> cm</li>
                        <li>體重: <?=$row["weight"]?> kg</li>
                        <li>電話: <?=$row["phone"]?></li>
                        <li>email: <?=$row["email"]?></li>
                    </ul>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
        <?php
    }
}else{ ?>
    <div class="card-body">
                    <h5 class="card-title">使用者不存在</h5>

                  <div>沒有這個人</div>
                </div>




    <?php
}
$conn->close();

?>
            </div>
        </aside>

    </div>
</div>



</body>
</html>


<?php
//
//if($result->num_rows>0){
////    echo "有東西";
//    while($row=$result->fetch_assoc()){
////        var_dump($row)."<br>";
//        echo
//            "叫什麼: " .$row["name"].
//            ", 身高:".$row["height"].
//            "Cm , 體重:".$row["weight"].
//            "Kg , email:".$row["email"].
//            ", 電話幾號:".$row["phone"].
//            ", 電子郵件:".$row["email"].
//
//            "<br>";
//
//    }
//}
//
//$conn->close();
//
////fetch_array()：將讀出的資料同時以數字與欄位名稱各自存一次在陣列之中，相當於同一個值會出現兩次。
////fetch_assoc()：將讀出的資料Key值設定為該欄位的欄位名稱。
////fetch_row()：將讀出的資料Key值設定為依序下去的數字。
//
//
?>