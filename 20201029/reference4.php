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
$a=5;
$b=&$a; //多了 ＆ 是抓值的意思

echo $a."<br>";
echo $b."<br>";

$a=10; //抓參考位子

echo $a."<br>";
echo $b."<br>";


?>
</body>
</html>