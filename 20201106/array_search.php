<?php
echo "<h3>in_array</h3>";
$cars=array("Toyota", "BMW", "Tesla");
var_dump(in_array("BMW", $cars));
//確定有沒有
echo "<br>";
echo "<h3>array_search</h3>";
echo array_search("BMW", $cars);
//顯示位置
echo "<br>";
echo "<h3>array_key_exists</h3>";
$students=array("John"=>"101", "Sam"=>"102");
var_dump(array_key_exists("Sam", $students));
//檢查有沒有