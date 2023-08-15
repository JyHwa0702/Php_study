<?php

    echo time()."<br>"; 

    $today = date('Y-m-d H:i:s',time());
    echo "오늘은 ".$today,"이다<br>";

    echo "<br><br>";
    echo "연도 : ".date("Y")."<br>";
    echo "월  : ".date("m")."<br>";
    echo "일  : ".date("d")."<br>";
    echo "요일 : ".date("i")."<br>";

?>