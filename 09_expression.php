<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Examples</title>
</head>
<body>
<?php 
// p.70
//xor : 互斥or, 當xor的兩側
//1.同為true或false, 其結果為false;
//2.兩側一為true一為false其結果為true
echo "true xor true : ", true xor true, "<br>"; //false
echo "true xor false : ", true xor false, "<br>"; //true
echo "10<5 xor 5<100 : ", 10<5 xor 5<100, "<br>"; //true

?>  

<!-- <h2>字串結合</h2> -->
<?php 
// p.72
$city = "桃園市";
$zone = "中壢區";
$road = "復興路46號";
$address = $city . $zone . $road;
echo "address : ", $address, "<br>";
?>
</body>
</html>