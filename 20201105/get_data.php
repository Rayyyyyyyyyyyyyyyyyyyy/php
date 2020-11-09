<?php

if(empty($_GET["name"])){
    echo "不會寫嗎?";
    exit();
}

if(empty($_GET["age"])){
    echo "不知道自己幾歲?";
    exit();
}



echo "姓名: ".$_GET["name"]."<br>";
echo "密碼: ".$_GET["password"]."<br>";
echo "年齡: ".$_GET["age"]."<br>";
//echo "email: ".$_GET["email"]."<br>";



if(!isset($_GET["email"])){
    echo "沒有寫 email<br>";
}

if(empty($_GET["email"])){
    echo "空的阿";
}
