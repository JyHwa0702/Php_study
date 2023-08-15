<!DOCTYPE html>
<?php
    $sentence = "<a href='http://www.namgarambooks.co.kr'><h1>남가람북스</h1></a>";

    //모든 태그를 제거한다.
    $result = strip_tags($sentence);

    echo $result."<br>";

    //옵션으로 지정한 태그를 남길 수 있다. 일부 태그를 제외하고 제거한다.
    $result2 = strip_tags($sentence,'<a>');
    echo $result2."<br>";
?>