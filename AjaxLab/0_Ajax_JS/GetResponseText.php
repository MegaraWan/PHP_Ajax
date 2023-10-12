<?php

try {
  //連線mysql
  require_once("../../connectBooks.php");

  //準備sql指令
  $sql = "select memId from member where memId=?";
  $member = $pdo->prepare($sql);
  $member->bindValue(1, $_GET["memId"]);
  
  //執行sql指令
  $member->execute();

  if ( $member->rowCount() !== 0 ) { //有取得資料, 所以此帳號已存在, 不可用
    echo "此帳號已存在, 不可用";
  } else { //此帳號可使用
    echo "此帳號可使用";
  } 
} catch (PDOException $e) {
  echo "error";
}

?>