<?php
// 9.20上午 p.166 
$memId = $_POST["memId"];
$memPsw = $_POST["memPsw"];
$errMsg = "";
try {
    require_once("../connectBooks.php");
    
    $sql = "select * from `member` where memId=:memId and memPsw=:memPsw"; //''

    $member = $pdo->prepare( $sql ); //先編譯好
    $member->bindValue(":memId", $memId); //代入資料
    $member->bindValue(":memPsw", $memPsw);
    $member->execute();//執行之

    if( $member->rowCount() == 0 ){//找不到
        $errMsg .= "帳密錯誤, <a href='sessionLogin.html'>重新登入</a><br>";
    }else{
        $memRow = $member->fetch(PDO::FETCH_ASSOC);
        //登入成功,將登入者的資料寫入session
        session_start();
        $_SESSION["memId"] = $memRow["memId"];
        $_SESSION["memName"] = $memRow["memName"];
        $_SESSION["email"] = $memRow["email"];
    }
} catch (PDOException $e) {
    $errMsg .= "錯誤 : ".$e -> getMessage()."<br>";
    $errMsg .= "行號 : ".$e -> getLine()."<br>";
}
?>  
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title></title>

</head>
<body>
<?php 
if($errMsg !=""){
    echo $errMsg;
}else{
    echo $memRow["memName"], " 您好~<br>";
}

?>

<a href="sessionMember.php">前往會員專區</a>  
</body>
</html>