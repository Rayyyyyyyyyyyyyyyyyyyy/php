<?php
$note="global note";

function notify(){
    $note="local note";
    $global_note=$GLOBALS["note"];
    echo $note;
    echo $global_note;
}

notify();

echo "<br>";

function static_example(){
    $a=0;
    static $b=0;
    echo "a is ".$a." and b is ".$b++;
    echo "<br>";
}
static_example();
static_example();
static_example();

function sum($a, $b){
function myHello(){
    echo "Hello here!<br>";
}
    myHello();
    echo $a + $b;
    echo "<br>";
}
$a=2;
$b=3;
sum($a, $b);
myHello();
