<?php
header("Access-Control-Allow-Origin:*");

try {

    require_once("../../connectDemo.php");
    $sql = "insert into emp (empno, ename, job, mgr, hiredate, sal, comm, deptno) values (:empno, :ename, :job, :mgr, :hiredate, :sal, :comm, :deptno)";
    $empStmt = $pdo->prepare( $sql );
    $empStmt->bindValue(":empno", $_POST["empno"]);
    $empStmt->bindValue(":ename", $_POST["ename"]);
    $empStmt->bindValue(":job", $_POST["job"]);
    $empStmt->bindValue(":mgr", $_POST["mgr"]);
    $empStmt->bindValue(":hiredate", $_POST["hiredate"]);
    $empStmt->bindValue(":sal", $_POST["sal"]);
    $empStmt->bindValue(":comm", $_POST["comm"]);
    $empStmt->bindValue(":deptno", $_POST["deptno"]);
    $empStmt->execute();
    $emp = $_POST;

    echo json_encode(["error" => false, "msg" => "新增員工成功"]);
} catch (PDOException $e) {
	$result = ["error" => true, "msg" => $e->getMessage()];
	echo json_encode($result);
}
?>