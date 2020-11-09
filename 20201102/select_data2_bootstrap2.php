    <?php
        require_once ("db_connect.php"); //引入基本資料檔
        $sql="SELECT name, height, weight, birth_date, phone, email FROM users";  //* 代表所有資料
        $result=$conn->query($sql);
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
<div class="table-responsive">
    <table class="table table-bordered table-sm">
        <thead>
        <tr class="text-nowrap">
<!--            <th>學號</th>-->
            <th>姓名</th>
            <th>身高(cm)</th>
            <th>體重(kg)</th>
            <th>生日</th>
            <th>email</th>
            <th>電話</th>
        </tr>
        </thead>
        <tbody>
        <?php
if ($result->num_rows>0){
    while ($row=$result->fetch_assoc()){ ?>
       <tr>
<!--           <td>--><?//= $row["id"] ?><!--</td>-->
           <td><?= $row["name"] ?></td>
           <td><?= $row["height"] ?></td>
           <td><?= $row["weight"] ?></td>
           <td><?= $row["birth_date"] ?></td>
           <td><?= $row["email"] ?></td>
           <td><?= $row["phone"] ?></td>
       </tr>

  <?php
    }
}
        $conn->close();
        ?>


        </tbody>
    </table>
</div>



    </div>


</body>
</html>
