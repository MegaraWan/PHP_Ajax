<?php
try{
  require_once("../../connectBooks.php");
  $sql = "select * from `member` where memId=:memId";
  $member = $pdo->prepare($sql);
  $member->bindValue(":memId", $_GET["memId"]);
  $member->execute();

  //如果找得資料，取回資料，送出json
  if ($member->rowCount() === 0) { //無此會員資料
    echo "{}";
  } else {
    $memRow = $member->fetch(PDO::FETCH_ASSOC);

    $result = ["memId"=>$memRow["memId"], "memName"=>$memRow["memName"], "email"=>$memRow["email"] , "tel"=>$memRow["tel"]];
    
    echo json_encode($result);//送出json字串
  }
} catch(PDOException $e) {
  $result = ["msg"=>$e->getMessage()];
  echo json_encode($result);
}
?>