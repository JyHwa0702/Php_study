<?php
    function showArray($array){
        for($i=0; $i<count($array); $i++){
            echo $array[$i]."<br>";
        }
    }

    echo "<br>--- 함수를 이용한 배열 출력하기 ---<br>";
    $array = Array("작약","이팝나무","연꽃","백일홍","나팔꽃");
    showArray($array);
?>