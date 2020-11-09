<?php
$arr=array("a", "b", "c");
array_shift($arr);
var_dump($arr);
echo "<br>";

array_unshift($arr, "A");
print_r($arr);
echo "<br>";

array_push($arr, "C", "D");
print_r($arr);