<?php
header("Access-Control-Allow-Origin:*");
$empData = json_decode(file_get_contents("php://input"), true);

try {

    require_once("../../connectSample.php");
    $sql = "insert into emp (empno, ename, job, mgr, hiredate, sal, comm, deptno) values (:empno, :ename, :job, :mgr, :hiredate, :sal, :comm, :deptno)";
    $empStmt = $pdo->prepare( $sql );
    $empStmt->bindValue(":empno", $empData["empno"]);
    $empStmt->bindValue(":ename", $empData["ename"]);
    $empStmt->bindValue(":job", $empData["job"]);
    $empStmt->bindValue(":mgr", $empData["mgr"]);
    $empStmt->bindValue(":hiredate", $empData["hiredate"]);
    $empStmt->bindValue(":sal", $empData["sal"]);
    $empStmt->bindValue(":comm", $empData["comm"]);
    $empStmt->bindValue(":deptno", $empData["deptno"]);
    $empStmt->execute();
    $emp = $empData;

    echo json_encode(["error" => false, "msg" => "新增員工成功", "emp" => $emp]);

} catch (PDOException $e) {
	$result = ["error" => true, "msg" => $e->getMessage()];
	echo json_encode($result);
}
?>