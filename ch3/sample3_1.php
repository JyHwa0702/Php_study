<?php

$word = "       trim fuction test       ";

echo "*".$word."*<br/>"; //문자열 양 끝에 있는 공백이 출력된다.

echo "*".trim($word)."*<br/>";  //문자열 양쪽에 공백이 제거된다.

echo "*".ltrim($word)."*<br/>"; // 문자열 왼쪽에 공백이 제거

echo "*".rtrim($word)."*<br/>";
?>