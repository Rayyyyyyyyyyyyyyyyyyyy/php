<?php
$arr1=array("name"=>"John", 2, 3);
$arr2=array("a", "b", "name"=>"Sam", "age"=>18, 4);
$result=array_merge($arr1, $arr2);
print_r($result);