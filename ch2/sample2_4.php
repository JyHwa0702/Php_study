<?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);

    //URL :http://localhost:9000/sample/ch2/sample2_4.php?x=11&y=3

    $x = $_GET['x'];
    $y = $_GET['y'];

    $result1 = $x + $y;
    $result2 = $x - $y;
    $result3 = $x * $y;
    $result4 = $x / $y;

    echo $x." + ".$y." = ".$result1."<br>";
    echo $x." - ".$y." = ".$result2."<br>";
    echo $x." * ".$y." = ".$result3."<br>";
    echo $x." / ".$y." = ".$result4."<br>";
?>