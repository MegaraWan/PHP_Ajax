<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Examples</title>
</head>
<body>

<h2>---------------------------全域變數 1</h2>
<!-- p.129 -->
<?php 

$amount = 0; 
// 全域變數 $amount:0, 也會放在 $GLOBALS["amount"]中, 
//$GLOBALS["..."]是可以在程式中的任何區塊中使用

//------------------取得上個月的營業總額
function getAmount(){
	//?????
	//........
	//..........
	$GLOBALS["amount"] = 300000; //使用全域變數$amount 
	return;
}

//-------------顯示上個月的營業總額
function showAmount(){
	//?????
	echo "<h3 style='color:deeppink'>總額 : {$GLOBALS["amount"]} 元 </h3>";
}

//呼叫函式取得上個的營業總額
getAmount();

//呼叫函式顯示上個月的營業總額
showAmount();
?>  


<h2>---------------------------全域變數 2</h2>
<?php 

$amount = 0; 
//------------------取得上個的營業總額
function getAmount2(){
	//........
	//..........
	//使用全域變數的$amount
	global $amount;
	$amount = 777;
	return;
}

function showAmount2(){//-------------
	//使用全域變數的$amount
	global $amount;
	echo "<h3 style='color:deeppink'>總額 : {$amount} 元 </h3>";
}

//呼叫函式取得上個的營業總額
getAmount2();

//呼叫函式顯示上個月的營業總額
showAmount2();
?>  


<h2>靜態參數</h2><!--  -->
<?php 
function myStatic(){
    static $i = 0; //區域變數 : $i :2 , ?????使用static, 另其結束時不會收回
    $i += 1; 
    return $i;
}
echo "呼叫myStatic函數第一次, i : " , myStatic(), "<br>"; 
echo "呼叫myStatic函數第二次, i : " , myStatic(), "<br>"; 
echo "呼叫myStatic函數第三次, i : " , myStatic(), "<br>";
?>
</body>
</html>