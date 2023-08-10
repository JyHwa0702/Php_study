<?php
    function sigma($limit){
        $sum=0;
        for($i=1; $i<=$limit; $i++){
            $sum = $sum +$i;
        }
        return $sum;
    }

    echo "10까지의 합계 : ".sigma(10)."<br>";
    echo "100까지의 합계 : ".sigma(100)."<br>";
    echo "1000까지의 합계 : ".sigma(1000)."<br>";


?>