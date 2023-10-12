<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Examples</title>
</head>
<body>

<h2>建立一維索引(0, 1, 2...來當做key)陣列array(), count()</h2> 
<!-- 9/13 p.100 -->
<?php
$arr1 = array(11, 22, 33, 44, 55, 66);
//array() php的函數
for($i=0; $i<count($arr1); $i++) {
    echo $arr1[$i],"<br>";
}

echo"陣列如果沒有照順序放入<br>";
//php中間不會自動補,JS會自動補
$arr[0] = 11 ;
//用這種方式會把前面的array()取代掉
$arr[1] = 22 ;
$arr[2] = 33 ;
$arr[] = 44 ;
$arr[8] = 888 ;

for ($i=0; $i<count($arr); $i++)
    echo $arr[$i],"<br>"
?>

<!-- 上述方法會報錯，用foreach就不會有這個問題: -->
<h2>foreach()</h2>
<?php
// p.103
$arr = array(11, 22, 33); //index : 0 1 2
//用array 函數會獨立出來 不會蓋掉前面的
$arr[8] = 888; // index : 8
$arr[] = 999; //放進去不用講第幾個他會自動放在最後面p.100
//但要取值echo $arr[]; 要講放第幾個不然會erro
foreach($arr as $i => $data){ //0=>11
    echo " $i : $data <br>";
}
echo "<hr>";
//前面的 $i索引可以省略 他會知道是抓資料本身
foreach($arr as $data) { //0=>11
    echo " $data<br>";
}

?>


<h2>關聯性陣列</h2>
<?php 
$zip = array("台北市" => "100", "中壢市" => "320" 0 => "台灣");
foreach($zip as $key => $data){
    //echo '$key => $data<br>';//單引號沒有變數替換功能
    echo "$key => $data<br>";
}

echo "<hr>";
foreach($zip as $data){
    // 可以省略 $key =>
    echo "$data<br>";
    //省略 $key =>
}

?>

<h2>print_r()</h2><!-- p.155 -->
<?php 
$arr = [11, 22];
print_r($arr);
?>

<h2>is_array()</h2> <!-- -->
<?php 
$a = 10;
$b = array(11,22);

echo "a is array? ", is_array($a), "<br>";//false 秀出來是空值
echo "b is array? ", is_array($b), "<br>";//1
?>

<h2>in_array(data, array) : 資料有在陣列中嗎</h2><!--  -->
<?php 
$arr = array(11,22) ;

echo "10 in array? ", in_array(10, $arr), "<br>"; //false
echo "11 is array? ", in_array(11, $arr), "<br>"; //true
?>

<h2>array_search(data, array) : 資料在陣列中的哪一個位置?</h2><!--  -->
<?php 
$arr = array(11,22,33,44,55) ;
// JS找不到時會傳回-1, PHP找不到時會傳回false
echo "10 在 array  中的索引值? ", array_search(10, $arr), "<br>"; //false
echo "11 在 array  中的索引值? ", array_search(11, $arr), "<br>"; //0

$data = 11;
if( array_search($data, $arr) === false){
    //陣列搜尋要用嚴格的相等比較，不然萬一是第0個位子也會跳false
    echo "找不到";
} else {
    echo "找到了";
}
?>


?>

<h2>shuffle()</h2>
<?php 
 $arr = array(11, 22, 33, 44, 55, 66, 77, 88, 99);
echo "shuffle前 : <br>";
print_r($arr);

echo "<hr>";
shuffle($arr);
echo "shuffle後 : <br>";
print_r($arr);
?>

<h2>shuffle()-------associative</h2>
<?php 
 $arr = array("a"=>"點3", "b"=>"點13", "c"=>"點23", "d"=>"點33");
echo "shuffle前 : <br>";
print_r($arr);

echo "<hr>";
shuffle($arr);
echo "shuffle後 : <br>";
//這個函數會把索引值自動改成 0 1 2 3 4
print_r($arr);
?>

<h2>shuffle()</h2>
<?php 
$arr = array("a"=>"點3", "b"=>"點13", "c"=>"點23", "d"=>"點33");
print_r($arr);
$arr2 = array_values($arr);
echo "取values : <br>";
print_r($arr2);
?>
</body>
</html>