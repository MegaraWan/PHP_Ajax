<?php
// 9.20上午 p.166 
//記得要使用session之前，要先啟用session
ob_start(); //output buffer
session_start();

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>session</title>
</head>
<body>
<?php
echo "id : ", session_id() ,"<br>";
//自session中取回登入者資料
echo "帳號 : ", $_SESSION["memId"], "<br>";
echo "姓名 : ", $_SESSION["memName"], "<br>";  
echo "email : ", $_SESSION["email"], "<br>";
?> 
</body>
</html>