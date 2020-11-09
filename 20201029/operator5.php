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
$x=77;
$y="77";
var_dump($x==$y);  //== 只比較值 字串還是數字都沒關係
var_dump($x===$y); // === 是連type也要一樣

?>
</body>
</html>
