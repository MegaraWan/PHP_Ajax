<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Examples</title>
</head>
<body>
<h2>--------------宣告function</h2>
<!-- p.118 -->
<?php 
function sum($a, $b) {
    return $a + $b;
}

echo "10 + 20 = ", sum(10,20), "<br>"; 
?>  


<h2>--------------參數可以是陣列型資料</h2><!--  -->
<?php 
function sumMany($array){//$array:[10, 20, 30]  //---------
    $sum = 0;
    for ($i=0; $i<count($array); $i++) {
        $sum += $array[$i];
    }
    return $sum;
}

$arr = [10, 20, 30]; 
$arr2 = [10, 20, 30, 40]; 
echo "10 + 20 + 30 = ", sumMany($arr), "<br>";
echo "10 + 20 + 30 + 40 = ", sumMany($arr2), "<br>";
?>  

<h2>--------------參數可以是陣列型資料---foreach改寫</h2><!--  -->
<?php 
function sumMany_2($array){
    $sum = 0;
    foreach ( $array as $key => $data) {
        $sum += $data;
    }
    return $sum;
}

echo "10 + 20 + 30 = ", sumMany_2([10, 20, 30]), "<br>";
echo "10 + 20 + 30 + 40 = ", sumMany_2([10, 20, 30, 40]), "<br>";
?>  

<h2>call by reference, by value--------------1</h2><!--p.123-->
<?php 
function sumByRefByValue(&$a,$b){ //&表示call by reference
  $c = $a + $b;
  $a = 100 + $a;
  $b = 100 + $b;
  return $c;
}

$x = 10; //$x:110 
$y = 20; //$y:20
echo "$x+$y=",sumByRefByValue($x,$y), "<br>"; //10+20=30 //---------------
//觀看x, y的值
echo "x=$x<br>"; 
echo "y=$y<br>"; 
?>

<h2>call by value--------------2</h2>
<?php 
//宣告函式
function adjustSalary($dataArr,$amt){ 
    for($i=0;$i<count($dataArr);$i++){
	      $dataArr[$i] += $amt; 
	}
	//修改後必須回傳
	return $dataArr;
}
   
$salaryArr = array(10000,20000,30000,40000);
//呼叫函式, 並接收回傳的值
$salaryArr = adjustSalary($salaryArr,2000);  //?????
//查看調薪後的結果
print_r($salaryArr);
?>


<h2>call by ref-----------2</h2><!-- p.125、126 -->
<?php 
//宣告函式
function adjustSalaryByRef(&$dataArr,$amt){//???令$dataArr使用和呼叫端相同的空間
    for($i=0;$i<count($dataArr);$i++){
	      $dataArr[$i] += $amt; 
	} 
	//直接改到呼叫端的內容,所以不用回傳
}
   
//呼叫函式
$salaryArr = array(10000,20000,30000,40000);
adjustSalaryByRef($salaryArr,2000); 
print_r($salaryArr);
?>



<h2>參數給預設值</h2><!-- p.128 -->
<?php 
function sayHello2($name="somebody", $msg="Hello"){ //?????
	echo "$name 說 $msg<br>";
}

sayHello2("Ann", "Hi~~~~~~~~~~~~");
sayHello2();
?>

</body>
</html>