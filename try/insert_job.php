<?php


require_once ("new.php"); //引入基本資料檔


$stmt =$connect->prepare("INSERT INTO job(name) VALUES(?)");

$stmt->bind_param('s', $name);

$name="禮儀主管";
$stmt->execute();
$name="金融騎士";
$stmt->execute();
$name="浴袍行銷人員";
$stmt->execute();
$name="叢林醫生";
$stmt->execute();
$name="長頭髮護理師";
$stmt->execute();
$name="迷幻藥老師";
$stmt->execute();
$name="狂熱記者";
$stmt->execute();
$name="勇者";
$stmt->execute();
$name="日風摔角手";
$stmt->execute();
$name="客服十字軍";
$stmt->execute();
$name="喝水人員";
$stmt->execute();
$name="鐵龜銷售員";
$stmt->execute();
$name="信仰主管";
$stmt->execute();
$name="華麗設計";
$stmt->execute();
