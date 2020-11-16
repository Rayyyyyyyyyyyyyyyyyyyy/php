<?php
header("Content-Type: text/html; charset=utf-8");
$db_host="localhost";
$db_username="root";
$db_password="sl0c1219";
$db_name="members";

try{
    $db_host = new PDO(
        "mysql:host={$db_host};
        dbname={$db_name};
        charset=utf8",
        $db_username, $db_password
    );
}catch (PDOException $e){
    // echo "資料庫進不去<br>";
    // echo "Error ".$e->getMessage();
    exit;
}
//echo "進去了";
//
//$db_host=NULL;

?>