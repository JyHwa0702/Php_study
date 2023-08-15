<?php
//문장안에 cat이라는 단어가 있는지 검색한다.
$reg = "/cat/";
$sentence1 = "I love my cat";
$sentence2 = "I love my dog";

$result1 = preg_match($reg,$sentence1);
$result2 = preg_match($reg,$sentence2);

if($result1 == 1){
    echo $sentence1."에는 cat이 있습니다. <br>";
}else{
    echo $sentence1."에는 cat이 없습니다. <br>";
}

if($result2 ==1 ){
    echo $sentence2."에는 cat이 있습니다.<br>";
}else{
    echo $sentence2."에는 cat이 없습니다.<br>";
}
?>
