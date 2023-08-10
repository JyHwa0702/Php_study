<?php
    $Filename = 'test.txt';
    $filecontent = "파일 쓰기를 연습해봅시다.\n";

    $fp = fopen($Filename, 'w');


    echo "file id 확인하기<br>";
    echo $fp."<br>";

    if($fp == null){
        echo "Cannot open file ($Filename)";
        exit;
    }

    if(fwrite($fp, $filecontent) === FALSE){
        echo "Cannot write to file ($Filename)";
        exit();
    }

    echo "파일 작성 성공<br>";
    fclose($fp)
?>