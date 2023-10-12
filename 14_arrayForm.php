<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Examples</title>
</head>
<body>
     <!-- p.110 -->
<?php 
echo "memId : ", $_GET["memId"], "<br>";

echo "--------------------ability : <br>";
//echo "ability : ", $_GET["ability"], "<br>";
//ability在前端以陣列的方式送過來所以會印不出來要用下面方式改寫
if( isset($_GET["ability"])) {
    foreach($_GET["ability"] as $ability){
        echo "ability : ", $ability, "<br>";
    }
} else {
    echo "無ability資料<br>";
}


echo "--------------------specialty : <br>";
//echo "specialty : ", $_GET["specialty"], "<br>";
if( isset($_GET["specialty"])) {
    foreach($_GET["specialty"] as $specialty){
        echo "specialty : ", $specialty, "<br>";
    }
} else {
    echo "無specialty資料<br>";
}

//isset(變數):可以用來檢測變數是否存
//避免前面html沒選資料送出的時候跳Warining
?>
  
</body>
</html>