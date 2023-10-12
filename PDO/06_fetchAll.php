<?php 
try {
	//引入連線工作的檔案
	require_once("../connectBooks.php");
	
	//執行sql指令並取得pdoStatement
	$sql = "select * from products";
	$products = $pdo->query($sql); 

	//取回所有的資料, 放在2維陣列中p.156
	$prodRows = $products->fetchAll(PDO::FETCH_ASSOC);
} catch (Exception $e) {
	echo "錯誤行號 : ", $e->getLine(), "<br>";
	echo "錯誤原因 : ", $e->getMessage(), "<br>";
	//echo "系統暫時不能正常運行，請稍後再試<br>";	
}
?>
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
<table class='products' align='center' width='800'>	
<tr bgcolor='#febefe'><th>書號</th><th>書名</th><th>價格</th><th>作者</th></tr>	
<?php 
//將二維陣列的資料一列一列的資料放到表格中
//foreach($prodRows as $i=>$prodRow) { 
//不需要key 所以把$i=>拿掉
foreach($prodRows as $prodRow) { 
?>
	<tr>
		<td><?=$prodRow["psn"]?></td>
		<td><?=$prodRow["pname"]?></td>
		<td><?=$prodRow["price"]?></td>
		<td><?=$prodRow["author"]?></td>
	</tr>
<?php	
}
?>

</table>

</body>
</html>