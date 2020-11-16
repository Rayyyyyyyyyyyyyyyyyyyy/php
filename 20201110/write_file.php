<?php
$handle=fopen('1589134931.txt', 'a+');
fwrite($handle, "Hello world!!".PHP_EOL);
fwrite($handle, "Hello world!!!".PHP_EOL);
fwrite($handle, "Hello world!!!!".PHP_EOL);
fwrite($handle, "Hello world!!!!!".PHP_EOL);
fwrite($handle, "Hello world!!!!!!".PHP_EOL);
fclose($handle);