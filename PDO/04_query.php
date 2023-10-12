<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Examples</title>
<style>
	.products td {
		border-bottom: 1px dotted deeppink;
	}
</style>
</head>
<body>
<?php
try {
	require_once("../connectBooks.php");
	//把連結的資訊放外面這樣之後每個人設定即使密碼那些不一樣還是可以抓到資料~

	//執行sql指令並取得pdoStatement
	$sql = "select * from products"; //sql 指令視需要加上join, where, order by, 
	$products = $pdo->query($sql); //$products是一個PDOStatement類別的物件

	
	//準備輸出到表格中
	echo "<table class='products' align='center' width='800'>";
	echo "<tr bgcolor='#bfbfef'><th>書號</th><th>書名</th><th>價格</th><th>作者</th></tr>";
	//----------------------------------------
	//透過pdoStatement取回一筆一筆的資料
	while( $prodRow = $products->fetch(PDO::FETCH_ASSOC)){
		echo "<tr>";
		echo "<td>{$prodRow["psn"]}</td>";
		echo "<td>{$prodRow["pname"]}</td>";
		echo "<td>{$prodRow["price"]}</td>";
		echo "<td>{$prodRow["author"]}</td>";
		echo "</tr>";		
	}

	//----------------------------------------
	echo "</table>";
	//函數列表p.146
	echo "======總列數 : ", $products->rowCount() , "<br>";
} catch (Exception $e) {
	echo "錯誤行號 : ", $e->getLine(), "<br>";
	echo "錯誤原因 : ", $e->getMessage(), "<br>";
	//echo "系統暫時不能正常運行，請稍後再試<br>";	
}
?>
</body>
</html>