<?php 
try {
	//引入連線工作的檔案
	require_once("../connectBooks.php");

	//執行sql指令並取得pdoStatement
	$sql = "select * from products";
	$products = $pdo->query($sql);

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
<tr bgcolor='#bfbfef'><th>書號</th><th>書名</th><th>價格</th><th>作者</th></tr>	
<?php 
// p.156
   while( $prodRow = $products->fetchObject() ){ 
	//取回一筆資料錄放在$prodRow中以物件的型式存在, 
	//欄位名稱會變成是物件的屬性
	//用 $prodRow 的-> 屬性 抓資料
		?>
			<tr>
			<td><?=$prodRow->psn?></td> 
			<td><?=$prodRow->pname?></td>
			<td><?=$prodRow->price?></td>
			<td><?=$prodRow->author?></td>
			</tr>
		<?php	
	}
?>
</table>

</body>
</html>