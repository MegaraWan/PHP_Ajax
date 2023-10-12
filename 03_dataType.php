<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Examples</title>
</head>
<body>
<h2>integer</h2>
<?php
//p.45
echo 25 , "<br>";  //十進位25
echo 06 , "<br>"; //八進位25
echo 025 , "<br>";//十六進位25
echo 1_234 , "<br>"; //方便閱讀 千位數=1,234的意思
?> 	

<!-- <h2>boolean</h2> -->
<?php
// //只有兩種值
// echo ????? , "<br>";  
// echo ????? , "<br>"; 
?> 


<h2>字串(單引號)</h2>
<?php 
//p.48
echo 'My name is Sara', '<br>';
echo 'My name is \'Sara\'', '<br>';
echo 'My name is \\Sara\\', '<br>';
echo 'My name is "Sara"', '<br>';
//單引號提供的跳脫字元 :
// \\ => \ , \' => ' 
?>

<h2>字串(雙引號)</h2>
<?php 
//p.49
echo "My name is Sara", '<br>';
echo "My name is 'Sara'", '<br>';
echo "My name is \"Sara\"", '<br>';

//雙引號提供的跳脫字元 :
// \\ => \ , \" => ",  \$ => $ 
?>

<!-- <h2>雙引號提供變數替換</h2> -->
<?php 
$name = "Ann";
$money = 6000;
echo "我的名字是", $name, "我有", $money, "<br>";


//p.50
//單引號没有變數替換的功能
echo '我的名字是$name, 我有$money<br>'; 

//雙引號有變數替換的功能:
echo "我的名字是$name, 我有$money元<br>"; 
//此行會error 因為會認為$money元是一個變數名稱，但沒有設
echo "我的名字是$name, 我有{$money}元<br>"; 
echo "我的名字是$name, 我有$money 元<br>"; 
//改寫上一列，加{}or空白

echo "我的名字是$name, 我有$NT{$money}<br>"; 
//此行會error 因為會認為$NT是一個變數名稱，但沒有設
echo "我的名字是$name, 我有\$NT{$money}<br>"; 
//改寫上一列
?>
</body>
</html>

