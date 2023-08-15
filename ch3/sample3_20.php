<?php
//배열만들기
$flowers = Array("작약","백일홍","수국","진달래","철쭉");

echo "<br>배열의 데이터 개수 : ".count($flowers)."<br>";

echo "<br>배열에 데이터 추가하기<br>";
array_push($flowers, "영산홍");
array_push($flowers,"찔레꽃");

print("<PRE>");
print_r($flowers);
print("</PRE>");

echo "<br>for문을 이용한 배열 내용 출력하기<br>";
for($i = 0; $i<count($flowers); $i++){
    echo $flowers[$i];
    echo '<br>';
}

echo "<br>foreach문을 이용한 배열 내용 출력하기<br>";
foreach ($flowers as $row){
    echo $row;
    echo '<br>';
}
?>
