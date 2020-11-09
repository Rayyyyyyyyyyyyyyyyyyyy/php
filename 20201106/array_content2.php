<?php
//array_slice
echo "<h3>array_slice</h3>";
$input=array("a", "b", "c", "d", "e");
$output=array_slice($input, 0, 4);
//數字是從哪裡開始跟要多長
var_dump($output);
echo "<br>";

//array_splice
echo "<h3>array_splice</h3>";
array_splice($input, 1, 3, 'john');
var_dump($input);


//array_rand
echo "<h3>array_rand</h3>";
$myArr=array("a", "b", "c", "d", "e");
$result=array_rand($myArr, 2);
//var_dump($result);
echo $myArr[$result[0]].", ".$myArr[$result[1]];



//array_flip
echo "<h3>array_flip</h3>";
$cars=array("BMW", "Totota", "Tesla");
$result=array_flip($cars);
var_dump($result);
