<?php
require_once ("db_connect.php"); //引入基本資料檔

//$sql="ALTER TABLE users ADD COLUMN age INT(3)";
//$sql="ALTER TABLE users ADD COLUMN valid TINYINT";
$sql="ALTER TABLE users ADD COLUMN Birthday DATE";

if($conn->query($sql)===TRUE){
    echo "幾歲?";
}else{
    echo "錯誤".$conn->error;
}

?>