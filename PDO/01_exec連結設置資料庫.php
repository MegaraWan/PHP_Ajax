<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Examples</title>
</head>
<body>
<?php 
	//------------------------------------------練習一
try {
	$dbname = "demo";
	$user = "root";
	$password = "";
	//9/14 上午 p.149
	$dsn = "mysql:host=localhost;port=3306;dbname=$dbname;charset=utf8";	
	// $options = array( 3=>0, 8=>0 ) 這樣會看不懂 建議寫成下面這樣
	// $options = array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION, PDO::ATTR_CASE=>PDO::CASE_NATURAL);簡寫成下面
	$options = [PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION, PDO::ATTR_CASE=>PDO::CASE_NATURAL];
	//??????

	//建立pdo物件
	$pdo = new PDO($dsn, $user, $password, $options);
	echo "連線成功<br>";

	//------------------------------------------練習二
	//執行sql指令
	// $sql = "update emp set sal += 100"; //此行的mysql指令有錯 不支援
	// $sql = "update emp set sal = sal + 100"; 
	// $pdo->exec($sql); //此行啟動上列mysql指令

	$sql = "update emp set sal = sal - 1000 where sal>5000"; 
	$affectedRows = $pdo->exec($sql);
	echo "成功的異動了{$affectedRows}筆<br>";
} catch (PDOException $e) {
	echo "錯誤行號 : " , $e->getLine(), "<br>";
	echo "錯誤原因 : " , $e->getMessage(), "<br>";
	//echo "系統暫時無法提供服務,請通知系統人員~<br>";
}
	//-------------------
	// echo "錯誤行號 : ", $e->getLine(), "<br>";
	// echo "錯誤原因 : ", $e->getMessage(), "<br>";
	// echo "系統暫時不能正常運行，請稍後再試<br>";
	//-------------------
	//======ATTR_ERRMODE : 3
	//ERRMODE_SILENT , 0
	//ERRMODE_WARNING, 1
	//ERRMODE_EXCEPTION 2
	//-------------------
	//======ATTR_CASE : 8
	//CASE_NATURAL ,0,  原欄位名稱 : memName  --> memName
	//CASE_UPPER   ,1,  原欄位名稱 : memName  --> MEMNAME
	//CASE_LOWER   ,2,  原欄位名稱 : memName  --> memname
	//

?>  

</body>
</html>