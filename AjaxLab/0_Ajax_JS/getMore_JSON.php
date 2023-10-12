<?php
try{
  //連線mysql
  require_once("../../connectBooks.php");

  //準備sql指令
  $sql = "select * from member where memId=?";
  $member = $pdo->prepare($sql);
  $member->bindValue(1, $_GET["memId"]);
  
  //執行sql指令
  $member->execute();

  //如果找得到資料，取回資料，送出json
  if ($member->rowCount()!==0) { 
    $memRow = $member->fetch(PDO::FETCH_ASSOC);
    $result = [
      "memId" => $memRow["memId"],
      "memName" => $memRow["memName"],
      "email" => $memRow["email"],
    ]; //將要送回前端的資料打包進關聯性陣列
    echo json_encode($result);
  } else { //若無此會員
    echo "{}";
  }

} catch(PDOException $e) {
  $result = ["errMsg"=>"執行失敗"];
  //將錯誤結果送出
  echo json_encode($result);
}
?>