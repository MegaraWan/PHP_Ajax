<?php
try{
  require_once("../../connectSample.php");
  $sql = "select * from dept"; 
  //$dept = $pdo->prepare($sql);
  //$dept->execute();
  $dept = $pdo->query($sql);

  if ( $dept->rowCount()=== 0) { //查無部門資料
    $result = ["error" => false, "msg" => "無部門資料", "dept" => "{}"];
    echo json_encode($result);
  } else { //登入成功
    $deptRows = $dept->fetchAll(PDO::FETCH_ASSOC);
    $result = ["error" => false, "msg" => "取得部門資料", "depts" => $deptRows];
    echo json_encode($result);//送出json字串
  }
} catch (PDOException $e) {
  $result = ["error" => true, "msg" => $e->getLine()];
  //echo $e->getLine(), "<br>";
  //echo $e->getMessage(), "<br>";
  echo json_encode($result);
}
?>