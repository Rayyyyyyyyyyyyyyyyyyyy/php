<?php
require_once ("db_connect.php"); //引入基本資料檔
//$sql="ALTER TABLE users CHANGE COLUMN name name VARCHAR (30), ADD INDEX(name)";
$sql="ALTER TABLE users CHANGE COLUMN email email VARCHAR (50), ADD INDEX(email)";

if($conn->query($sql)===TRUE){
    echo "改了改了";

}else{
    echo "沒改".$conn->error;
}


?>