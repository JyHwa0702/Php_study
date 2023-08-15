<?php

  //URL : http://localhost:9000/sample/ch2/sample2_5.php?userid=test&password=1234

  $userid = $_GET['userid'];
  $password = $_GET['password'];

  echo "당신의 아이디는".$userid."이고 비밀번호는 ".$password."입니다.";
?>