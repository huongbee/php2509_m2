<?php

/*function inSo(){
	//echo 4;
	return 4;
}*/

/*
function inSo($number,$num2){
	return [$number,$num2];
}

$number = 5;
$b = 4;

print_r(inSo($number,$b));

*/
/*
function inCauChao($name="Nam"){
	return "chào bạn ".$name;
}

echo inCauChao();
*/

/*function getData($a=4, $b=2, $c, $d, $e){
	return [$a,$b,$c,$d,$e];
}
*/

/*function getData($c, $d, $e, $a=4, $b=2){
	return [$a,$b,$c,$d,$e];
}

$d = 6;
$e = 10;
$data = getData('',$d,$e);

echo "<pre>";
print_r($data);
echo "</pre>";
*/

function getData($data = []){
	return $data;
}

$d = 6;
$e = 10;
$data = getData([$d,$e,5,6,7,8,9,0]);
echo "<pre>";
print_r($data);
echo "</pre>";

if(in_array(7, $data)){
	echo "tồn tại 7 trong arr";
}
else{
	echo "ko tồn tại 7";
}
echo "<br>";

function loop(){
	for($i=1;$i<=10;$i++){
		echo $i.' ';
	}
}

/*loop();
echo "<br>";


function loop2($min, $max){
	for($min;$min<=$max;$min++){
		echo $min.' ';
	}
}

loop2(3,6);*/


function doiCho($min, $max){
	/*$t = $max;
	$max = $min;
	$min = $t;*/

	$min = $min +$max; //3+5 = 8
	$max = $min - $max;//8-5 = 3
	$min = $min - $max;//8-3 = 5

	echo $min.' '.$max;
}

doiCho(3, 5);
echo "<br>";


//input: 	n = 3
//output:   2 3 là số ng tố nhỏ hơn 3

//input: 	n = 9
//output:   2 3 5 7 là số ng tố nhỏ hơn 9

//input: 	n = 7
//output:   2 3 5 là số ng tố nhỏ hơn 7

//81
//2-9

function checkSNT($number){
	if($number<2){
		return false;
	}
	else{
		for($i=2;$i<=sqrt($number);$i++){
			if($number%$i==0){
				return false;
			}
		}
		return true;
	}
}

$n = 200;
$result = '';
for($i=2;$i<$n;$i++){
	if(checkSNT($i)){
		$result .= $i." ";
	}
}

//echo $result. "là số ng tố nhỏ hơn $n";




/*function tangMot($a){ //tham trị
	$a+=1;
	return $a;
}*/

function tangMot(&$a){ //tham biến
	$a+=1;
	return $a;
}


// $a = 10;
// echo "1. kq pt = ".tangMot($a);
// echo "<br>";

// echo "2. kq pt = ".tangMot($a);
// echo "<br>";

// echo "a=".$a;


function device($a){
	if($a == 0){
		throw new Exception("Vui lòng nhập số khác 0");
	}
	return 1/$a;
}


try{
	echo device(6);
	echo device(0);
}
catch(Exception $ex){
	echo $ex->getMessage();
}
?>