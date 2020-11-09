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
echo "I say \"go home!!!\"."; //反斜線 跳脫字元
echo '<br>';
echo 'The path is C:\newpath';
echo '<br>';
echo 'The path is C:\\newpath';
echo '<br>';
echo "I said \"go home!!\""; //都是雙引號才會作用
echo '<br>';
echo 'I said \'Go home!!\''; //都是單引號才會作用
?>
</body>
</html>