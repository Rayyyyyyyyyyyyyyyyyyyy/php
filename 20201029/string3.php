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
echo "John say 'Hello!!'<br>"; //單引號裡面可以用雙引號
echo 'John say "Hello!!"<br>'; //雙引號裡面也可以用單引號

$foo =1 + "2"; //字串類型的數字跟純數字可以做數學運算
echo $foo;
echo "<br>";

$foo =1 + "11.5";
echo $foo;
echo "<br>";


$a="Hello";
$a=$a." World"; //字串相加要用 . 不能用 +
echo $a;

?>
</body>
</html>