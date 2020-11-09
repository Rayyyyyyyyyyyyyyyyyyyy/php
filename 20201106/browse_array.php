<?php
$array=array("one", "two", "three", "four");
echo current($array)."<br>";
next($array);
next($array);
echo current($array)."<br>";
reset($array);
echo current($array)."<br>";

echo "<hr>";

do{
    echo current($array)."<br>";

}while(next($array));