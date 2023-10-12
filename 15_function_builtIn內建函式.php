<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Examples</title>
</head>
<body>
    <!-- p.114 -->
<h2>math</h2>
<?php 
echo "2.4 : ", 2.4,"<br>"; 
echo "floor(2.4) : ", floor(2.4) , "<br>"; //2
echo "ceil(12/6) : ", ceil(12/6) ,"<br>"; //2
echo "ceil(12/8) : ", ceil(12/8) ,"<br>"; //2
?> 

<h2>string</h2>
<?php 
 $str = "abcdeabcde";
 echo 'strlen($str) : ', strlen($str) ,"<br>"; //10
 echo 'strpos($str,"cd") : ', strpos($str, "cd") ,"<br>"; //2

 echo 'strpos($str,"cdd") : ', strpos($str, "cdd") ,"<br>"; //false 
 echo 'substr($str,2,5) : ', substr($str, 2, 5) ,"<br>"; //cdeab
// //切割成好幾個子字串
$str = "aa,bb:cc,dd,ee";
$arr = explode(",", $str);
print_r($arr);
?> 

<!-- 日月金木ab水火土 -->

<h2>mbstring.dll-------2</h2><!-- p.116 -->
<?php 
//multi-byte string
// php.ini檔中修改下列設定


$str = "日月金木ab水火土";
echo 'strlen($str) : ', strlen($str) , "<br>";  //byte
echo 'strpos($str,"金") : ', strpos($str,"金"), "<br>"; 
echo 'substr($str,2,5) : ', substr($str, 2, 5) , "<br>";//byte
//--------------------
//字組的語言體系要用mb_strlen
$str = "日月金木ab水火土";
echo 'mb_strlen($str) : ', mb_strlen($str) , "<br>";  //charater
echo 'mb_strpos($str,"金") : ', mb_strpos($str,"金"), "<br>"; 
echo 'mb_substr($str,2,5) : ', mb_substr($str, 2, 5) , "<br>";//charater
//--------------------

$title = "8月千萬劑疫苗緩不濟急 應開放輝瑞進口";
//如果title長度大於10, 就取前7碼, 再加上...
if( mb_strlen($title)>10) {
    $str = mb_substr($title, 0, 7) . "...";
} else {
    $str = $title;
}
echo $str, "<br>";
//另一種寫法--------------------
$title = "台灣加油~台灣加油~台灣加油~";
$str = mb_strlen($title)>10 ? mb_substr($title, 0, 7) . "..." : $title;
echo $str, "<br>";
?>  

<h2>time(), date(), mktime()</h2><!-- p.117 -->
<?php 
echo "現在時刻: ", time() ,"<br>"; //形同JS的new Date(); //1694586093
echo "今天是 ", date("星期 w", time()),"<br>"; 
echo "今天是 ", date("D", time()),"<br>"; 
echo "今天是 ", date("Y-m-d H:i:s", time()),"<br>"; 
echo "今天是 ", date("Y-m-d H:i:s"),"<br>"; 

//----------------------------------
$birthday = mktime(0, 0, 0, 3, 21, 2000); 
//形同JS的new Date(2000, 2, 21); 日期2000/3/21 JS月份會-1
echo date("星期 w", $birthday), "<br>";

//----------------------------------
$yy = date("Y");
$mm = date("m");
$dd = date("d");
$deadline = mktime(0, 0, 0, date("m"), date("d") + 14, $yy);
echo "deadline是 ", date("Y-m-d H:i:s", $deadline),"<br>"; 
?>
</body>
</html>