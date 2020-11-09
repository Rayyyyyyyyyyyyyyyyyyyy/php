<?php

$var1="John";
$var2="John";
echo strcmp($var1, $var2)."<br>";
echo "比較字串 兩個一樣會0 不一樣就1"."<br>";

if($var1 ==$var2){
    echo "yes";
}else{
    echo "no";
}
echo "<br>";

$string="Samantha";
echo substr($string,5)."<br>";
echo "拆解字串，數字代表第幾個開始往後"."<br>";
echo substr($string,-4)."<br>";
echo "拆解字串，數字代表往前到第幾個"."<br>";
echo substr($string, 5 ,3)."<br>";
echo "拆解字串，第一個數字代表第幾個開始 
第二個數字是抓幾個，第一個數字的位子的不會算"."<br>";



