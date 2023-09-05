<?php

include '../../../common/config.php';
include '../../../common/auth.php';
include '../../../common/function.php';
include '../../../common/DB_helper.php';
$type = $_REQUEST['type'];

if($type == "getList") {
    $db_helper = new DB_helper();
    $query = "select * from tugw.board;";
    $result = $db_helper->Select2($query);
    //result 배열로 들어옴
    echo json_encode($result);
    //print_r해도됨 출력값 뿌리기, return으로 쓸 수 없음 통신이라. 서버에서 함수 불러내듯이 하는게 아니여서

}

else if($type == "getDetail"){
    $db_helper = new DB_helper();
    $query = "select * from tugw.board where idx=".$_REQUEST['idx'].";";
    $result = $db_helper ->Select2($query);


    echo json_encode($result);
}
else if($type == "saveForm"){
    $db_helper = new DB_helper();
    $idx = $_REQUEST['idx'];
    $subject = $_REQUEST['subject'];
    $content = $_REQUEST['content'];

    if(empty($idx)){
    $query = "insert into tugw.board set";
    $query .= " `subject`='".$subject."',";
    $query .= " content='".$content."';";
    $result = $db_helper ->Insert2($query);

    }
    else
    {
        $query = "update tugw.board set ";
        $query .= " subject= '".$subject."', ";
        $query .= " content= '".$content."' ";
        $query .= " where idx=".$idx.";";
        $result = $db_helper ->Update2($query);
    }
    echo json_encode($result);
}
else if($type == "deleteForm"){
    $db_helper = new DB_helper();
    $idx = $_REQUEST['idx'];

    if (!empty($idx)){
        $query = "delete from tugw.board";
        $query .= " where idx=".$idx.";";
        $result = $db_helper ->Delete($query);
    }
    echo json_encode($result);
}