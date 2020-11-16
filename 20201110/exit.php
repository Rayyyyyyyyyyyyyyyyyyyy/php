<?php

function divide($a, $b){
    if($b==0){
        exit("divided by 0 error");
    }else{
        $c=$a/$b;
        echo "a / b = ".$c;
    }
}
divide(6, 4);
echo "<br>";
divide(9, 0);