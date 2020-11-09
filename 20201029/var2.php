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
<?php //全域變數
$a = 99;
function show(){
    // echo $a //無法直接使用全域變數
//    echo $GLOBALS['a']; //要用GLOBALS 才能跳出function去抓全域變數
    $b=18; //區域變數
//    echo $b;
//    echo "b is $b\n";  //單引號跟雙引號 不一樣
    static $c=1;
    echo "b is $b\n";
    echo "c is $c\n";

    $b="b is $b+1<br>";
    $c="c is $c+1<br>";

    $b=$b+1;

}
show();

?>
</body>
</html>
