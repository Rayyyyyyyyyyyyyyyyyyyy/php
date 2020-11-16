<?php

function myfunc_1(){
    echo "in my Func_1<br>";
}

function myfunc_2(){
    echo "in myFunc_2";
}

$template="myFunc_";
$func_array=array(1, 2);

foreach ($func_array as $func){
    $calling = $template.$func;
    $calling();
}