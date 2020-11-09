<?php
echo $_SERVER["PHP_SELF"]."<br>";
echo $_SERVER["SCRIPT_FILENAME"]."<br>";
echo __FILE__."<br>";
echo __DIR__."<br>";
echo "Current path is: ".realpath("..")."<br>";