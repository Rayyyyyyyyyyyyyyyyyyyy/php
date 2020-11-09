<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Session read</title>
</head>
<body>
<?php
echo "台灣的首都是 ".$_SESSION["Taiwan"]["capital"]."<br>".
"人口是: ".$_SESSION["Taiwan"]["population"]."<br>";

?>
</body>
</html>
