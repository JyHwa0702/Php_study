<?php
$flowers = array("작약", "목련", "목단","백일홍","수국","금잔화");

$key = "백일홍";
//위치 찾기

$pos = array_search($key,$flowers);

if($pos){
    echo $key."의 위치 : ".$pos."<br>";
}else{
    echo $key."를 찾을 수 없습니다.";
}

?>
