<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Examples</title>
</head>
<body>

<h2>if...........1</h2>  
<?php 
//p.78
$avg = 88;
if($avg >= 80){
	echo "通過<br>";
}else{
 	echo "再努力<br>";
}
?>

<h2>if...........2</h2>  
<?php 
//p.82
//php特有的寫法
$avg = 88;
if($avg >= 80)
 	echo "通過<br>";
else
 	echo "再努力<br>";
?>


<h2>for...........1</h2>
<?php 
//p.85
//印出1到10, 並計算其總和
$sum = 0;
for($i=1; $i<=9; $i++){
	echo $i, "+";
	$sum += $i;
	}
$sum += $i;
echo $i, "=", $sum, "<br>";
?>

<h2>for...........2</h2>
<?php 
//php特有的寫法
$sum = 0;
for($i=1; $i<=9; $i++):
	echo $i, "+";
	$sum += $i;
endfor;
$sum += $i;
echo $i, "=", $sum, "<br>";
?>

</body>
</html>