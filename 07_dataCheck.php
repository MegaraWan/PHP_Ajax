<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Examples</title>
</head>
<body>
<h2>gettype(), is_...</h2> 
<?php 
//p.58

$name = "Sara";
$money = 6000;

echo 'gettype($name) : ', gettype($name), "<br>";//string

//is開頭表示問:是不是
echo 'is_integer($name):', is_integer($name), "<br>";//false
//php false 會印空白

echo 'is_string($name):', is_string($name), "<br>";//ture
//php ture 會印1


var_dump($name, $money);

?> 
</body>
</html>