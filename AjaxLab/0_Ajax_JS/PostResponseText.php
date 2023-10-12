<?php
try{
  //連線mysql
  require_once("../../connectBooks.php");

  //準備sql指令
  $sql = "select * from member where memId = ?";
  $member = $pdo->prepare($sql);
  $member->bindValue(1, $_POST["memId"]);
  $member->execute();  

  if( $member->rowCount() != 0){ //此帳號已存在, 不可用
    echo "此帳號已存在, 不可用";
  }else{ //此帳號可使用
    echo "此帳號可使用";
  } 
}catch(PDOException $e){
  echo "error";
}
?>