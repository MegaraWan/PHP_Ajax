<!-- (2)建立01memberShow.php將自01member.html送來的表單資料以表格的方式顯示出來 -->

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Examples</title>
</head>
<body>
<table border="1">
    <tr>
        <th>欄位</th>
        <th>資料</th>
    </tr>
    <tr>
        <td>姓名</td>
        <td><?php echo $_POST['memName'] ; ?></td>
    </tr>
    <tr>
        <td>帳號</td>
        <td><?php echo (strlen($_POST['memId']) <= 8) ? $_POST['memId'] : substr($_POST['memId'], 0, 8); ?></td>
        
    </tr>
    <tr>
        <td>密碼</td>
        <td><?php$memPsw = (strlen($_POST['memPsw']) <= 8) ? $_POST['memPsw'] : substr($_POST['memPsw'], 0, 8);?></td>
    </tr>
    <tr>
        <td>e-mail</td>
        <td><?php echo $_POST['email']; ?></td>
    </tr>
    <tr>
        <td>性別</td>
        <td><?php echo ($_POST['gender'] == 'male') ? '男' : '女'; ?></td>
    </tr>
    <tr>
        <td>生日</td>
        <td><?php echo $_POST['birthday']; ?></td>
    </tr>
    <tr>
        <td>聯絡電話</td>
        <td><?php echo $_POST['tel']; ?></td>
    </tr>
</table>

</body>
</html>

