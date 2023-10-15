<?php 
try{
	require_once("../connectBooks.php");

	$sql = "select * from products where psn = :psn";
	$product = $pdo->prepare($sql);

	$product->bindValue(":psn", $_GET["psn"]);
	$product->execute();

	if($product->rowCount() == 0){ //查無此書籍資料
		echo "<center>查無此書籍資料~</center>";
		exit();
	}else{ //若有滿足篩選條件的資料
		$prodRow = $product->fetch(PDO::FETCH_ASSOC);
	}
	
}catch(PDOException $e){
	echo "錯誤行號 : ", $e->getLine(), "<br>";
	echo "錯誤原因 : ", $e->getMessage(), "<br>";
	// echo "系統暫時不能正常運行，請稍後再試<br>";	
}
 ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Examples</title>
<style>
	.productTable th{
		background-color: pink;
	}

	.productTable td{
		border-bottom: 2px dotted deeppink;
	}
</style>
</head>
<body>
<div style="background-color:#bebefe">這是navBar</div>	
	<form action="04_prodUpdateToDb.php" method="post">
		<input type="hidden" name="psn" value="<?=$prodRow["psn"]?>">
 	<table class="productTable" align="center">
 	 	<tr><th>書號</th><td><?=$prodRow["psn"]?></td></tr>
 	 	<tr><th>書名</th><td><input type="text" name="pname" value="<?=$prodRow["pname"]?>"></td></tr>
 	 	<tr><th>價格</th><td><input type="text" name="price" value="<?=$prodRow["price"]?>"></td></tr>
 	 	<tr><th>作者</th><td><input type="text" name="author" value="<?=$prodRow["author"]?>"></td></tr>
 	 	<tr><th>頁數</th><td><input type="text" name="pages" value="<?=$prodRow["pages"]?>"></td></tr>
 	 	<tr><th>圖檔</th><td><input type="text" name="image" value="<?=$prodRow["image"]?>"></td></tr>
 	 	<tr><td colspan="2" align="center"><input type="submit" value="確定修改"><input type="reset" value="取消">
 	 		</td></tr>
 	 </table> 
 	</form>
</body>
</html>