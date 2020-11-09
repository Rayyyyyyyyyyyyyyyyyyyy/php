<?php
$setResult=setcookie("cookie_2", "apple");
?>
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
if(isset($setResult)){
    echo "cookie_2 saved successfully with value = ".$_COOKIE["cookie_2"];
}else{
    echo "cookie_2 is not saved successfully";
}

?>



</body>
</html>
