<?php 
try {
	//引入連線工作的檔案
	require_once("../connectBooks.php");

	$sql = "select * from products";
	$products = $pdo->query($sql); 
	//取回所有的資料, 放在2維陣列中
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
	a{
		text-decoration: none;
	}
	a:hover{
		text-decoration:underline;
	}
</style>
</head>

<body>
<div style="background-color:#bebefe">這是navBar</div>
<table class='products' align='center' width='800'>	
<tr bgcolor='#febefe'><th>書號</th><th>書名</th><th>價格</th><th>作者</th></tr>	
<?php 

  foreach( $prodRows as $i => $prodRow){
		?>
			<tr>
			<td><?=$prodRow["psn"]?></td>
			<td>
				<a href="prodQuery.php?psn=<?=$prodRow["psn"]?>">
				<?=$prodRow["pname"]?>
				</a>	
			</td>
			<td><?=$prodRow["price"]?></td>
			<td><?=$prodRow["author"]?></td>
			</tr>
		<?php	
	}
?>
</table>

</body>
</html>