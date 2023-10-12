<?php
//記得要使用session之前，要先啟用serssion


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
echo "帳號 : ", "<br>";
echo "姓名 : ", "<br>";  
echo "email : ", "<br>";
?> 
</body>
</html>