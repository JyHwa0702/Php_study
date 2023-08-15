<?php
$dir = "/Applications/XAMPP/xamppfiles/htdocs/Php_study/ch3";

$handle = opendir($dir);    //해당 디렉터리를 핸들을 획득해야한다.

$files = array();   //파일 목록을 담을 배열을 만든다.

$FIlename = readdir($handle); // 첫번쨰 파일을 읽는다.
while ($FIlename != false){
    if($FIlename != "." && $FIlename != ".."){
        $path = $dir . "/" . $FIlename;
        if(is_file($path)) // 파일인 경우만 목록에 추가한다.
        {
            $files[] = $FIlename;
        }
    }
    $FIlename = readdir($handle);
}

//핸들 해제
closedir($handle);

//정렬, 역순으로 정렬하려면 rsort 사용
sort($files);

//파일명을 출력한다.
foreach ($files as $f){
    echo $f;
    echo "<br/>";
}
?>
