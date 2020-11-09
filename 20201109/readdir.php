<?php
$path='C:\xampp\htdocs\20201109';
$handle=opendir($path);

while ($file= readdir($handle)){
    echo $file."<br>";

}

closedir($handle);