<?php


require_once ("new.php"); //引入基本資料檔


$stmt =$connect->prepare("INSERT INTO hobby(name) VALUES(?)");

$stmt->bind_param('s', $name);

// $name="沒有興趣";
// $stmt->execute();
$name=" ";
$stmt->execute();
//$nam="不能說的秘密";
//$stmt->execute();
//$name="阿姆斯特朗回旋加速噴氣式阿姆斯特朗炮";
//$stmt->execute();
//$name="刷卡";
//$stmt->execute();
//$name="使出星爆氣流斬";
//$stmt->execute();
//$name="豬突猛進";
//$stmt->execute();
//$name="一本正經地胡說八道";
//$stmt->execute();
//$name="膝蓋中箭";
//$stmt->execute();
//$name="螺旋升天";
//$stmt->execute();
//$name="咬著吐司奔跑";
//$stmt->execute();
//$name="坐在靠窗倒數第二個座位";
//$stmt->execute();
//$name="刷存在感";
//$stmt->execute();
//$name="推克拉拉";
//$stmt->execute();
//$name="知難而上";
//$stmt->execute();
//$name="用小拳拳捶死你";
//$stmt->execute();
//$name="暑假最後一天才寫暑假作業";
//$stmt->execute();
