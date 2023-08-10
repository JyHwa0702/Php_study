<?php
    //URL : http://localhost:9000/sample/ch2/sample2_7.php?seconds=45670

    $seconds = $_GET['seconds'];

    $temp = $seconds;
    $hour = (int)($temp / 3600);
    $temp = $temp % 3600;
    $min = (int)($temp/60);
    $temp = $temp%60;
    $sec = $temp;

    echo $seconds."초는 ".$hour."시간".$min."분 ".$sec."초 입니다.<br>";



?>