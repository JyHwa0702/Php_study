<?php
$colors = array("red","green","blue","yellow");

echo "색 : $colors[0]<br>";
echo "색 : $colors[1]<br>";
echo "색 : $colors[2]<br>";
echo "색 : $colors[3]<br>";

array_push($colors, "brown");
array_push($colors,"magenta");
array_push($colors, "cyan","gigigi");

foreach($colors as $key => $value){
    echo "키 : ". $key . ", 값 : " . $value . "<br>";
}
?>