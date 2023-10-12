<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Examples</title>
</head>
<body>
	<h2>建立二維列</h2>
<?php 

$arr = array(array(1,2,3), array(11,12,13,14,15), array(21,22,23,24), array(31,32,33));
$arr = [ [1,2,3], [11,12,13], [21,22,23], [31,32,33] ];


$html = "<table border='1'>";
for( $i=0; $i<count($arr); $i++) { //<table border='1'><tr>

	// 	$html = $html . "<tr>"; //php字串串接要加 . 
	// 	for ($j=0; $j < count($arr[$i]); $j++) { 
	// 		//php 變數要加錢字號 $i
	// 		$html = html . "<td>{$arr[$i][$j]}</td>";
	// 	}
	// 	$html = $html ."</tr>";
	// }
	// $html = $html ."</table>";
	// 小數點可以移到前面後面$html刪掉 簡寫成以下
	
	$html . =  "<tr>"; 
	for ($j=0; $j < count($arr[$i]); $j++) { 
		//php 變數要加錢字號 $i
		$html .= "<td>{$arr[$i][$j]}</td>";
	}
	$html .= "</tr>";
}

$html .= "</table>";
echo $html;
?>  

<h2>part2_使用foreach()改寫以上code</h2>
<?php 
$arr = [ [1,2,3], [11,12,13], [21,22,23], [31,32,33] ];

$html = "<table border='1'>";
foreach( $arr as $i => $row) {
	$html .= "<tr>";
	foreach ( $row as $j => $data) { 
		$html .= "<td>{$arr[$i][$j]}</td>";
	}
	$html .= "</tr>";
}
$html .= "</table>";
echo $html;
?>

<h2>part2_使用foreach()-------------2</h2>
<?php 
$arr = [ [1,2,3], [11,12,13], [21,22,23], [31,32,33] ];

$html = "<table border='1'>";
foreach( $arr as $row) {
	//把$i 跟
	$html .= "<tr>";
	foreach ( $row as $data) { 
		// $j拿掉
		$html .= "<td>{$data}</td>";
		//改成 $data 沒有指向 代表資料本身
	}
	$html .= "</tr>";
}
$html .= "</table>";
echo $html;
?>
</body>
</html>