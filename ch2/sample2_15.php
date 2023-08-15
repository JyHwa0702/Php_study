<?php
    //URL : http://localhost:9000/sample/ch2/sample2_15.php?member=1 회원
    //URL : http://localhost:9000/sample/ch2/sample2_15.php?member=0 비회원

    $member = $_GET['member'];

    $point =0;

    //회원에게만 +10점을 한다.

    if($member == 1){
        $point = $point +10;
    }

    echo "당신의 포인트트 현재 $point 입니다.";
?>