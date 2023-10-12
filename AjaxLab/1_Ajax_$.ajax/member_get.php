<?php 
 
try {
	require_once("../connectBooks.php");
	$sql = "select * from member where memId=?";
	$member = $pdo->prepare($sql);
	$member->bindValue(1, $_REQUEST["memId"]); //$_REQUEST[], 可以接收以get或post送來的資料
	$member->execute();
	if($member->rowCount() === 0){
		echo "{}";
	}else{
		$memRow = $member->fetch(PDO::FETCH_ASSOC);
		echo json_encode($memRow);		
	}

} catch (PDOException $e) {
	//echo "錯誤原因 : ", $e->getMessage(), "<br>";
	//echo "錯誤行號 : ", $e->getLine(), "<br>";
	// echo "系統錯誤, 請通知系統維護人員<br>";
	$result = ["msg"=>"系統錯誤, 請通知系統維護人員"];
	echo json_encode($result);
}
?>