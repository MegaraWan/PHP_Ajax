<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Examples</title>
<meta name="description" content="">
<meta name="keywords" content="">
<link href="" rel="stylesheet">
</head>
<body>
    <?php 
    //p.52
    echo "您的IP : ",$_SERVER["REMOTE_ADDR"], "<br>";
    //用IP網址開，才會秀出IP: 10.1.4.217/phpLab/04_server.php
    echo "目前執行的程式 : ", $_SERVER["PHP_SELF"],"<br>";
    
    phpinfo();
    //這可看PHP的版本跟設定資料等等內容
    ?>
</body>
</html>