<?php
echo date_default_timezone_get();
echo "<br>";
echo date("H:i:s");
ini_set('date.timezone', 'Asia/Taipei');
echo "Asia/Taipei<br>";
echo date("H:i:s")."<br>";
ini_set('date.timezone', 'Asia/Tokyo');
echo "Asia/Tokyo<br>";
echo date("H:i:s");
date_default_timezone_set('Asia/Taipei');
echo "Asia/Taipei<br>";
echo date("H:i:s");