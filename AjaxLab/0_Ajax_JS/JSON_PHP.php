<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Examples</title>
<style>
	h2{color:deeppink}
</style>
</head>
<body>
<h2>索引陣列-----------------------json_encode()</h2>
<?php 
$arr = [11, 22, 33];
$str = json_encode($arr);
echo $str;
?>  

<h2>關聯性陣列-----------------------json_encode()</h2>
<?php 
$arr = ["empno" => 7001, "ename" => "Ann", "sal" => 7000];
$str = json_encode($arr);
echo $str;
?> 

<h2>(ordered list 型式)json解碼-----------------------json_decode()---2</h2>
<?php 
$str = '[11,22,33]';
$arr = json_decode($str);
foreach ( $arr as $i => $data) {
	echo $data, "<br>";
}
?>

<h2>(collection型式)json解碼-----------------------json_decode()---2</h2>
<?php 
$str = '{"empno":7001,"ename":"Ann","sal":7000}';
$arr = json_decode($str, true); //第二個參數表示是否轉回關聯性陣列, true表示要轉成關聯性陣列, false表示要轉成物件
//echo $arr["ename"], "<br>";
foreach ( $arr as $i => $data) {
	echo "$i: $data<br>";
}
?> 

<h2>(collection型式)json解碼-----------------------json_decode()---2</h2>
<?php 
$str = '{"empno":7001,"ename":"Ann","sal":7000}';
$obj = json_decode($str, false); //第二個參數表示是否轉回關聯性陣列, true表示要轉成關聯性陣列, false表示要轉成物件

//echo $obj->ename, "<br>";
foreach ( $obj as $i => $data) {
	echo "$i: $data<br>";
}
?> 
</body>
</html>