<?php
function recursion($a){
    if($a<50){
        echo "$a  ";
        recursion($a+1);
    }
}
recursion(0);