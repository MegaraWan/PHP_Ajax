<?php 

try {
    //將上傳的檔案先拷貝好到要放的資料夾
    if ( $_FILES["image"]["error"] === 0) {
        //-----------------決定好資料夾的路徑
        $dir = "../images/";
        if( !file_exists($dir) ){
            mkdir($dir);
        }
                
        $from = $_FILES["image"]["tmp_name"];

        //-----------------決定檔案名稱
        //$fileName = $_FILES["image"]["name"]; //原檔名
        $filename = uniqid(); //使用uniqid()來當做主檔名 650aad4a96a29
        $pathInfo = pathinfo($_FILES["image"]["name"]);//取得檔案的資訊放在陣列中
        $fileExt = $pathInfo["extension"]; //check.ico, smile.gif
        $filename = "{$filename}.{$fileExt}"; //加上副檔名的檔名 650aad4a96a29.ico

        $to = $dir . $filename;
        copy($from, $to);
    } else {
        $fileName = "";
    }


    //連線
    require_once("../connectBooks.php");
    
    //準備sql
    $sql = "insert into products (pname, price, author, pages, image) 
    values (:pname, :price, :author, :pages, :image)";

    $products = $pdo->prepare($sql);
    $products->bindValue(":pname", $_POST["pname"]);
    $products->bindValue(":price", $_POST["price"]);
    $products->bindValue(":author", $_POST["author"]);
    $products->bindValue(":pages", $_POST["pages"]);
    $products->bindValue(":image", $filename); //
    //執行sql
    $products->execute();
    echo "新增成功~";


    
} catch (Exception $e) {
    echo "錯誤行號 : ", $e->getLine(), "<br>";
    echo "錯誤原因 : ", $e->getMessage(), "<br>";
    //echo "系統暫時不能正常運行，請稍後再試<br>";  
}
?>

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
    
</body>
</html>