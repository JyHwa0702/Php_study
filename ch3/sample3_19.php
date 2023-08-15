<?php
mkdir('./test'); //폴더 만들기

$Filename = './test.text'; //원본 파일

//실제 존재하는 파일인지 체크...
if(file_exists($Filename)){
    if(!copy($Filename,"./test/".$Filename)){
        echo "파일 복사 실패.";
    }else if (file_exists($Filename)){
        echo "파일 복사 성공";
    }
}

//해당폴더의 파일 삭제하기
unlink("./test/".$Filename);
?>
