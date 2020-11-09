<?php
echo "<h3>strstr()</h3><br>";

$string="john@test.com";
echo strstr($string, "@")."<br>";
echo "找到第一個出現的位子往後呈現"."<br>";
echo strstr($string, "@" ,true)."<br>";
echo "加上true 會往前"."<br><br>";

echo "<h3>strpos()</h3>"."<br>";

$string2="Hello world";
echo strpos($string2 , "world")."<br>";

echo "印出單字是從第幾個位子開始"."<br>";

if(!strpos($string2 ,"hello")===false){
    echo "not found<br>";
}else{
    echo strpos($string2, "Hello")."<br>";
}
echo strpos($string2 , "hello")."<br>";
echo "可以判斷大小寫，如果不對，就不會印出來<br>";

echo "<h3>stripos()</h3>"."<br>";
echo stripos($string2 , "world")."<br>";
echo stripos($string2 , "hello")."<br>";
echo "str ' i ' pos 多了i 就不會區分大小寫<br>";

echo "<h3>strtok()</h3>"."<br>";
$string3="Hello John, how are you<br>";
$token=strtok($string3, "w");
echo $token."<br>";
echo "分割 只顯示設定值往前的內容<br>";

$stringArr=explode(" ",$string3);
var_dump($stringArr);
for($i=0;$i<count($stringArr);$i++){
    echo $stringArr[$i]."<br>";
}


echo "<h3>str_replace()</h3>"."<br>";
echo str_replace("world", "Kitty", $string2)."<br>";
echo "取代";
