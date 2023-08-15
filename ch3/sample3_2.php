<?php
$sentence ="<a href='http://www.namgarambooks.co.kr'><h1>남가람북스</h1></a>";

$result = htmlspecialchars($sentence);

echo $result."<br>";
echo $sentence;
?>