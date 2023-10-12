<?php
try{
  require_once("../../connectSample.php");

  if ($_GET["deptno"] == "0") { //準備好sql指令和PreparedStatement
    $sql = "select * from emp";
    $emp = $pdo->prepare($sql);
    $emp->execute();
  } else {
    $sql = "select * from emp where deptno = ?";
    $emp = $pdo->prepare($sql);
    $emp->bindValue(1, $_GET["deptno"]);
    $emp->execute();
  }

  if ( $emp->rowCount() === 0) { //查無部門員工資料
    $result = ["error" => false, "msg" => "無部門員工資料", "emps" => "{}"];
    echo json_encode($result);
  } else {
    $empRows = $emp->fetchAll(PDO::FETCH_ASSOC);
    $result = ["error" => false, "msg" => "取得部門資料", "emps" => $empRows];
    echo json_encode($result);//送出json字串
  }
} catch (PDOException $e) {
  $result = ["error" => true, "msg" => $e->getMessage()];
  echo json_encode($result);
}
?>