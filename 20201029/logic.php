<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php


$x=10;
$y=5;

echo var_dump($x==10 and $y==5); //兩邊都要成立才會true &&

echo var_dump($x==10 or $y==5); //兩邊有一邊成立就可以 ||

$a = false || true;
var_dump($a);


$b = false or true;
var_dump($b);




?>
</body>
</html>
