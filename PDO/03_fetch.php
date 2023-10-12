<?php 
// 9/18上午
//在這裡取得資料的門票
try {
	$dbname = "books";
	$user = "root";
	$password = "";

	$dsn = "mysql:host=localhost;port=3306;dbname=$dbname;charset=utf8";

	$options = array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION, PDO::ATTR_CASE=>PDO::CASE_NATURAL);
	
	//建立pdo物件
	$pdo = new PDO($dsn, $user, $password, $options);	

	//執行sql指令並取得pdoStatement
	$sql = "select * from products";
	$products = $pdo->query($sql);

	//?????

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
<!-- p.156 -->
<!--在這裡顯示資料 -->
<?php 
$row = $products -> fetch(PDO::FETCH_BOTH);
//FETCH_NUM抓欄位順序 FETCH_ASSOC抓欄位資訊 預設BOTH兩者都有
echo $row[1],"<br>";
echo $row["pname"],"<br>";
print_r($row);


//fetch好幾筆資料會一直新增新的，不知道有幾筆用while迴圈來做
//$row =$products -> fetch(PDO::FETCH_BOTH);
//echo $row["pname"],"<br>";
//$row =$products -> fetch(PDO::FETCH_BOTH);
//echo $row["pname"],"<br>";
//$row =$products -> fetch(PDO::FETCH_BOTH);
//echo $row["pname"],"<br>";
?>


<!-- <?php 
// while( $prodRow = $products->fetch(PDO::FETCH_ASSOC)){
// 		echo "<tr>";
// 		echo "<td>{$prodRow["psn"]}</td>";
// 		echo "<td>{$prodRow["pname"]}</td>";
// 		echo "<td>{$prodRow["price"]}</td>";
// 		echo "<td>{$prodRow["author"]}</td>";
// 		echo "</tr>";		
// 	}
	?> -->
	<!-- php可以把一段程式碼截好幾段，
	這樣就可以放入html標籤就可以有class名稱，
	標籤裡面再用php撈資料 改寫成下面-->

<?php 
while($prodRow = $products -> fetch(PDO::FETCH_ASSOC)){
?>
	<tr>
	<td><?php echo $prodRow["psn"]?></td>
	<!-- php可以php echo 只寫= 表示把變數放進去的意思 -->
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