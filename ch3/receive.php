<?php
    $data = $_POST["data"];

    echo $data;

    echo "<br/><br/>";

    $data = nl2br($data); // \n 문자를 <br> 태그로 바꾸는 함수
    echo $data
?>