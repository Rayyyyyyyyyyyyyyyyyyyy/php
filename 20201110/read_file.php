<?php
$handle=fopen('1589134931.txt', 'r');

while ($line=fgets($handle)){
    echo $line."<br>";
}

rewind($handle);
echo fgetc($handle);

fclose($handle);