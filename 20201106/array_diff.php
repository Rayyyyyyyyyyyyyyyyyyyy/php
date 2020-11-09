<?php
$a=array("a", "b", "c", "d");
$b=array("a", "c", "y", "z");
print_r(array_diff($a, $b));
//抓不同的值

echo "<br>";

print_r(array_diff_assoc($a, $b));
//位置不同也會抓
echo "<br>";

print_r(array_intersect($a, $b));
//內容一樣就會印出來
echo "<br>";
print_r(array_intersect_assoc($a, $b));
//內容跟位置都一樣才會印出來

