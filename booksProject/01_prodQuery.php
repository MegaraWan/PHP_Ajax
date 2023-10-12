<?php 
try{
	require_once("../connectBooks.php");

	$sql = "select * from products where psn = {$_GET["psn"]}";
	$products = $pdo->query($sql);
 
	if( $products->rowCount() === 0) {//查無此書籍資料
		require_once("booksHeader.inc.php");
		echo "<center>查無此書籍資料</center>";
		require_once("booksFooter.inc.php");
		exit();
	}
 //若有滿足篩選條件的資料
	$prodRow = $products->fetch(PDO::FETCH_ASSOC);
}catch(PDOException $e){
	echo "錯誤行號 : ", $e->getLine(), "<br>";
	echo "錯誤原因 : ", $e->getMessage(), "<br>";
	// echo "系統暫時不能正常運行，請稍後再試<br>";	
}

require_once("booksHeader.inc.php");
 ?>

 	<table class="productTable" align="center">
 	 	<tr><th>書號</th><td><?=$prodRow["psn"]?></td></tr>
 	 	<tr><th>書名</th><td><?=$prodRow["pname"]?></td></tr>
 	 	<tr><th>價格</th><td><?=$prodRow["price"]?></td></tr>
 	 	<tr><th>作者</th><td><?=$prodRow["author"]?></td></tr>
 	 	<tr><th>頁數</th><td><?=$prodRow["pages"]?></td></tr>
 	 	<tr><th>圖檔</th><td><?=$prodRow["image"]?></td></tr>
 	 </table> 
<?php
require_once("booksFooter.inc.php");
?>