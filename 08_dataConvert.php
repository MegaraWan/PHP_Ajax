<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Examples</title>
</head>
<body>

<h2>自動轉型</h2>
<?php 
//p.60
// js +號 : 算術or字串結合
// php +號 : 算術
$aInt = 123;   
$bStr = "100";   
$cBool =  true; 
echo ($aInt + $bStr) , "<br>";
echo ($aInt + $cBool) , "<br>";
echo ($bStr + $cBool) , "<br>";
?>

<h2>強制轉型</h2>
<?php 
//p.61
//---------------1 (int)
$a = 123.5;
$b = (int)$a;
var_dump($a, $b);
echo "<hr>";
//a的值本身沒有改變

//---------------2 settype()
//將$a轉型為integer
settype($a, "integer");
//倒出來看看
var_dump($a);
//var_dump 印出值
echo "<hr>";
//a的值改變了
?>

</body>
</html>