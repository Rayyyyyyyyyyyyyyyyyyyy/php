<?php

require_once("db_connect.php");


$sql = "CREATE TABLE user_like(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
product_id INT (4) NOT NULL,
user_id INT(6) NOT NULL
)";
if ($conn->query($sql) === TRUE) {
    echo "成功";
} else {
    echo "錯誤" . $conn->error;
}
$conn->close();



