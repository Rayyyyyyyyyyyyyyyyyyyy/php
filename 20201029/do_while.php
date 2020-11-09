<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Do while</title>
</head>
<body>
<?php
$a=0;
do{
    $a++;
    echo "$a"."+++";
    //先做事 再跑回圈
}while($a<10);


?>
</body>
</html>