<?php
$Filename = 'test.txt'; //읽을파일
$filecontent = "";

$fp = fopen($Filename,'r');

if($fp == NULL){
    echo "Cannot open file ($Filename)";
    exit;
}

$filecontent = fread($fp, 1024);

echo $filecontent;
fclose($fp);
?>