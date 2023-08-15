<?php
//연관성 배열
//key 와 value 형태로 저장하기

$colors = array(
    'red' => "빨간색",
    'green' => "초록색",
    'blue' => "파란색"
);

$colors['black']="검은색";

//두개의 배열을 합쳐서 다른 배열을 만든다
$colors =array_merge($colors,Array('white' =>"흰색"));

foreach ($colors as $keys => $values){
    echo $keys . '=>' .$values . '</br>';
}
?>
