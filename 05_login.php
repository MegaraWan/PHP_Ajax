<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Examples</title>
</head>
<body>
    OK
<?php 
//p.54 55
// echo "帳號 : ", $_GET["memId"], "<br>";
// echo "密碼 : ", $_GET["memPsw"], "<br>";

//[放html的 form method:GETorPOST，[] input標籤的name名稱]
echo "帳號 : ", $_POST["memId"], "<br>";
echo "密碼 : ", $_POST["memPsw"], "<br>";
echo "<hr>";


//p.56
echo "有話要說(原始) : <br>",$_POST["note"],"<hr>";
//輸入的enter 在html解讀上變成空白
echo "有話要說(new line to br) : <br>",nl2br($_POST["note"]), "<hr>";
//用nl2br(new line to br):把enter鍵秀出來
?>
</body>
</html>