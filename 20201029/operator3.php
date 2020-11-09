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
echo "a is:". $a--; //運算符號再後面就是先表示 a 再跑運算
echo "<br>"; // a 變成 4 了 但不會顯示
echo "a is:". --$a; //運算符號在後面 就是先跑運算再表示
echo "<br>";
echo "a is: $a";
echo "<br>";
$b=6;
echo "b is:".++$b. "<br>";
echo "b is:".$b++. "<br>";
echo "b is $b<br>";




?>
</body>
</html>