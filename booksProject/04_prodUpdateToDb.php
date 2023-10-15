<?php 
try {
	require_once("../connectBooks.php");
	//執行sql指令
	$sql = "update products set pname=:pname, price=:price, author=:author,
	pages=:pages,image=:image where psn=:psn";

	$products = $pdo->prepare($sql);
	$products->bindValue(":psn", $_POST["psn"]);
	$products->bindValue(":pname", $_POST["pname"]);
	$products->bindValue(":price", $_POST["price"]);
	$products->bindValue(":author", $_POST["author"]);
	$products->bindValue(":pages", $_POST["pages"]);
	$products->bindValue(":image", $_POST["image"]);
	$products->execute();

	//-------------------
	/* 如果每隔都要改 可以用foreach的寫法
	$products = $pdo->prepare($sql);
	foreach($_POST as $key => $data){
		$products->bindValue(":$key", $data);
	}
	$products->execute();
	*/
	echo "異動成功~";

} catch (PDOException $e) {
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
</head>
<body>
</body> 
</html>