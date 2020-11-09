<?php
require_once ("db_connect.php"); //引入基本資料檔

$sql_product="SELECT * FROM products";
$result_product=$conn->query($sql_product);
$total_item=$result_product->num_rows;

$page=1;
$item_per_page=5;
$start=($page-1)*$item_per_page;

$total_page=floor($total_item/$item_per_page)+1;
if($total_item%$item_per_page==0)$total_page=$total_page-1;

$first_item=($page-1)*$item_per_page+1;

$last_item=$page*$item_per_page;

if($last_item>=$total_item)$last_item=$total_item;

$sql="SELECT products.*,category.name AS category_name FROM products 
    JOIN category ON products.category_id = category.id 
    LIMIT $start,$item_per_page
   ";
//只能選一個TABLE
//要用JOIN...ON加入另外一個TABLE
//JOIN越多 效能越差 少用

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
    <div class="px-2 text-left">


        目前在第 <?=$page?> 頁 , 總共有 <?=$total_page?> 頁  </div>
<!--    <div class="px-2 text-left">-->
<!--        這裡有 --><?//=$item_per_page?><!-- 項商品 , 總共有 --><?//=$total_item?><!-- 項商品-->
<!---->
<!--    </div>-->
    <div class="px-2 text-left">
        這裡有 <?=$first_item?>~~<?=$last_item?> 項商品  總共有 <?=$total_item?> 項商品
    </div>
    <table class="table table-bordered table-sm">
        <thead>
        <tr>
            <th>序號</th>
            <th>分類</th>
            <th>產品名字</th>
            <th>價格</th>


        </tr>
        </thead>
        <tbody>
        <?php
        if ($result->num_rows>0){
            while ($row=$result->fetch_assoc()){  ?>
        <tr>
            <td><?=$row["id"]?></td>
            <td><?=$row["category_name"]?></td>
            <td><?=$row["name"]?></td>
            <td class='text-right'><?=$row["price"]?></td>
        </tr>

        <?php    }
        }
        $conn->close();

        ?>


        </tbody>
    </table>


</div>

</body>
</html>