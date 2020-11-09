<?php
require_once ("new.php"); //引入基本資料檔

$sql="SELECT member.* FROM member
JOIN hobby 
ON member.hobby1 = hobby.id 
AND member.hobby2 = hobby.id 
OR member.hobby3 = hobby.id
";
$result=$connect->query($sql);


$sql_hobby="SELECT * FROM hobby";
$result_hobby=$connect->query($sql_hobby);

$array_hobby=array();

if($result_hobby->num_rows > 0){
    while ($row_hobby=$result_hobby->fetch_assoc()){
        array_push($array_hobby, $row_hobby["name"]);
    }
}

if ($result->num_rows > 0){
    while($row=$result->fetch_assoc()){

echo $row["name"]."的興趣是: ".
    $array_hobby[$row["hobby1"]-1]." "
    . $array_hobby[$row["hobby2"]-1]. " "
    .$array_hobby[$row["hobby3"]-1]."<br>";

    }
}
