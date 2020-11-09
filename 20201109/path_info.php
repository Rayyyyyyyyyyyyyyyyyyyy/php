<?php
$path=__FILE__;

echo "PATHINFO_DIRNAME: ".pathinfo($path, PATHINFO_DIRNAME)."<br>";
echo "PATHINFO_BASENAME: ".pathinfo($path, PATHINFO_BASENAME)."<br>";
echo "PATHINFO_EXTENSION: ".pathinfo($path, PATHINFO_EXTENSION)."<br>";
echo "PATHINFO_FILENAME: ".pathinfo($path, PATHINFO_FILENAME)."<br>";