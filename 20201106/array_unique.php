<?php
$input=array(
    "a"=>"John", "Sam",
    "b"=>"John", "Marry", "Sam"
);
$result=array_unique($input);
print_r($result);
//把重複的東西剔除掉