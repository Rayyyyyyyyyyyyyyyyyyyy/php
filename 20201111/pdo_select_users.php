<?php
require_once "PDO_connect.php";
$sql="SELECT * FROM users";
$stmt=$db_host->prepare($sql);
try {
    $stmt->execute();
    while ($row = $stmt->fetch()){
        echo "<pre>";
//        print_r($row);
        echo $row["name"]."- 身高: ".$row["height"]."cm, 體重: ".$row["weight"]."kg";
        echo "</pre>";

    }
}catch (PDOException $e){
    echo "預處理陳述式執行失敗！ <br/>";
    echo "Error: ".$e->getMessage()."<br/>";
    $db_host=NULL;
    exit;
}