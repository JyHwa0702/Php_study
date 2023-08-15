<?php
    function gugu($dan){
        for($i=1; $i<=9; $i++){
            printf("%d X %d = %d<br>",$dan,$i,$dan*$i);
        }
    }

    function gugu2($dan){
        $result ="";
        for($i=1; $i<=9; $i++){
            $result = $result.$dan." X ".$i."=".$dan*$i."<br/>";
        }
        return $result;
    }

    echo "<br>--- 구구단 출력함수 ---<br>";
    gugu(2);
    echo gugu2(3);
?>