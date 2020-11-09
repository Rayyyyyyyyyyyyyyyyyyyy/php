<?php

$a=array("0","1","2");
$b=array(0,1,2);
//陣列比較
//echo var_dump($a == $b)."<br>";
//echo var_dump($a === $b)."<br>";
//echo var_dump($a != $b)."<br>";
//echo var_dump($a <> $b)."<br>";
//echo var_dump($a !== $b)."<br>";

//聯集
$c=array(
    "John"=>array("John", 1),
    "Sam"=>array("Sam",2)
);
$d=array(
  "John"=>array("John",3),
  "Marry"=>array("Mary",4)
);

$e=$c+$d;
print_r($e);