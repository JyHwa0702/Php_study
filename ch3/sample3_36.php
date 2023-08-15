<?php
$reg = "/star/";
$sentence = "I like star, red star, blue star, yellow star. I like star";
$result = preg_match($reg, $sentence, $match);
print_r($result);
print_r($match);
echo "<br>";

$result = preg_match_all($reg,$sentence,$match);
print_r($result);
print_r($match);
echo "<br>";

$result = preg_replace($reg,"moon",$sentence);
echo $result."<br>";
?>