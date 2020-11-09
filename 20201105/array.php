<?php

//陣列寫法一
//$array=["apple","orange","banana"];
//var_dump($array);


//寫法二
//$array[0]="apple";
//$array[1]="orange";
//$array[2]="banana";
//var_dump($array);

//寫法三
//$array=array("apple","orange","banana");
//var_dump($array);


$array[]="apple";
$array[]="orange";
$array[]="banana";
var_dump($array);

echo "<br>";

$b[0]=3;
$b[3]=2;
$b[4]=1;
var_dump($b);
echo $b[3];