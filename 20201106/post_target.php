<?php

if(!isset($_POST["name"]) || !isset($_POST["birthday"])){
    echo "正常點不要整天投機取巧";
    exit();
}

$telecom=$_POST["telecom"];
$phone=$_POST["phone"];
$name=$_POST["name"];
$birthday=$_POST["birthday"];
$gender=$_POST["gender"];

if(!isset($_POST["newsletter"])){
    $receive="不要";
}else{
    $receive="好";

}


echo $_POST["newsletter"];
echo "name is $name, birthday is $birthday.性別: $gender 電信業者是: $telecom ,$receive 電子抱
<br>";
echo "phone is ";
foreach($phone as $value){
    if($value==""){
        continue;
    }
    echo $value.", ";
}