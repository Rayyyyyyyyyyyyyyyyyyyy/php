<?php
require_once "PDO_connect.php";
$sql="UPDATE users SET phone=?, email=? WHERE id=?";
$stmt=$db_host->prepare($sql);
$stmt->execute(["49679848940", "John@gmail.com", 1]);

echo "更新了";