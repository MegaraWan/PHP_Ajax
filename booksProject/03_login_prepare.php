<?php 
$memId = $_POST["memId"];
$memPsw = $_POST["memPsw"];

try{
	//連線
	require_once("../connectBooks.php"); 
	// //-------------------------------使用question mark parameter
	//$sql = "select * from `member` where memId=? and memPsw=?";
	//將sql指令編譯過
	//$member = $pdo->prepare($sql);

	//將資料代入參數中(未知數中);
	//$member->bindValue(1, $memId);
	//$member->bindValue(2, $memPsw);

	//執行之
	//$member->execute();

	//-------------------------------使用named parameter
	$sql = "select * from `member` where memId=:memId and memPsw=:memPsw";
	//用冒號取名，:memId 也可以取甚麼 :x 
	//將sql指令編譯過
	//p.157
	$member = $pdo->prepare($sql);

	//將資料代入參數中(未知數中);
	$member->bindValue(":memId", $memId);
	$member->bindValue(":memPsw", $memPsw);
	
	//執行之
	$member->execute();
	if($member->rowCount() === 0) {
		//若查無此人的資料即為帳密錯誤, 請重新登入~<br>
		require_once("00_booksHeader.inc.php");
		echo "<center>帳密錯誤, 請<a href='03_login_prepare.html'>重新登入~</a></center>";
		require_once("00_booksFooter.inc.php");
		exit();		
	}

	//若有此人資料，請取回資料並顯示登入者名字
	$memRow = $member->fetch(PDO::FETCH_ASSOC);
}catch(PDOException $e){
	echo "錯誤行號 : ", $e->getLine(), "<br>";
	echo "錯誤原因 : ", $e->getMessage(), "<br>";
	//echo "系統暫時不能正常運行，請稍後再試<br>";	
}
require_once("00_booksHeader.inc.php");
 ?>  

<?php 
echo $memRow["memName"], ", 您好~";
 ?> 

<?php 
require_once("00_booksFooter.inc.php");
?>