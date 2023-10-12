<?php
session_start();
try{
  require_once("../../connectBooks.php");
  $sql = "select * from member where memId=:memId and memPsw=:memPsw"; 
  $member = $pdo->prepare($sql);
  $member->bindValue(":memId", $_POST["memId"]);
  $member->bindValue(":memPsw", $_POST["memPsw"]);
  $member->execute();

  if ( $member->rowCount()=== 0) { //查無此人, 帳密錯誤
    //??????
  } else { //登入成功
    //自資料庫中取回資料
    $memRow = $member->fetch(PDO::FETCH_ASSOC);

    //送出登入者的姓名資料

  }
} catch (PDOException $e) {
  $result = ["msg"=>$e->getMessage()];
  echo json_encode($result);
}
?>