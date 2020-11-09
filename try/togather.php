<?php
require_once ("new.php"); //引入基本資料檔

$sql="SELECT member.* FROM member
JOIN hobby 
ON member.hobby1 = hobby.id 
AND member.hobby2 = hobby.id 
OR member.hobby3 = hobby.id
JOIN job ON member.id = job.id
JOIN photo ON member.photo = photo.id";

$result=$connect->query($sql);


$sql_hobby="SELECT * FROM hobby";
$result_hobby=$connect->query($sql_hobby);

$array_hobby=array();


$sql_job="SELECT * FROM job";
$result_job=$connect->query($sql_job);

$array_job=array();


$sql_photo="SELECT * FROM photo";
$result_photo=$connect->query($sql_photo);

$array_photo=array();



if($result_hobby->num_rows > 0){
    while ($row_hobby=$result_hobby->fetch_assoc()){
        array_push($array_hobby, $row_hobby["name"]);
    }
}
if($result_job->num_rows > 0){
    while ($row_job=$result_job->fetch_assoc()){
        array_push($array_job, $row_job["name"]);
    }
}

if($result_photo->num_rows >0){
    while ($row_photo=$result_photo->fetch_assoc()){
        array_push($array_photo, $row_photo["name"]);
    }
}


if ($result->num_rows > 0){
  while($row=$result->fetch_assoc()){

        echo

      $array_photo[$row["photo"]-1]."  ".
            $row["name"]."的興趣是: ".
            $array_hobby[$row["hobby1"]-1]." "
            . $array_hobby[$row["hobby2"]-1]. " "
            .$array_hobby[$row["hobby3"]-1]."<br>".
            "職業是: ".$array_job[$row["job"]-1]."<br>";


var_dump($row["about"]);
  }
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .product_img{
            width: 75px;
            height: 75px;
            padding-bottom: 10px;
        }
        .product_img img{
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
            <?php
                if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {?>
        <h1> <?=$row["id"]?> </h1>

    <h3>這是姓名: <?=$row["name"]?> </h3>
        <figure class="product_img">
        <img src="img/<?=$array_photo[$row["photo"]-1] ?>" alt="">
        </figure>
<?php }
}
?>
    </div>
</div>
</body>
</html>
