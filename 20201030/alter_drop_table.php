<?php
//require_once ("db_connect.php"); //引入基本資料檔
$sql="ALTER TABLE users DROP COLUMN age";

if($conn->query($sql)===TRUE){
    echo "改了改了";

}else{
    echo "沒改".$conn->error;
}


?>