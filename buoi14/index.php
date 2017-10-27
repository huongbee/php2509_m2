<?php

// echo abs(-3);
// echo "<br>";
// //echo rand(1,99);
// echo rand(1000,99);

$str = "chao ban";

//echo $vitri = strpos($str, 'a') ; //left->right
//echo $vitri = stripos($str, 'a') ;
//echo $vitri = strrpos($str, 'a') ; //right->left
//echo $vitri = strripos($str, 'a') ;
//echo $str2 = strrchr($str, 'a'); //sau cùng
//echo $str2 = strstr($str, 'a'); //đầu tiên

//echo $str2 = substr($str, $vitri, 0) ;
//echo strlen(trim($str));




// $fileName = "hinh1.2.3.4.jpg";

// $vitriEnd = strripos($fileName, '.'); //11
// $name = substr($fileName, 0,$vitriEnd);// hinh1.2.3.4
// //$ext = strrchr($fileName,'.');
// $ext = substr($fileName,$vitriEnd);

// echo $newName = $name.'-'.rand(999999,999999999).$ext;



// //hinh1.2.3.4 - 1343546676543
// //jpg

// $endName = "hinh1.2.3.4 - 1343546676543.jpg"



//$checkDate = checkdate(2, 29, 2012);
//var_dump($checkDate);
/*echo date_default_timezone_get();
echo "<br>";*/
date_default_timezone_set('Asia/Ho_chi_minh');
echo "<br>";
// echo date_default_timezone_get();
// echo date('d-m-Y H:i:s');
// echo "<br>";


//  echo time();
// // echo "<br>";
// $date = getdate();

// print_r($date);

// $t = strtotime("2017/1/15");
// echo $t;


// định dạng lại kiểu d-m-Y cho ngày 2016/2/26 

//echo date('d-m-Y H:i:s', strtotime('2016/2/26 5:36:20'));


function get_Date($date){
	date_default_timezone_set('Asia/Ho_chi_minh');
	$day = (int)date('d',strtotime($date));
	$month = date('m',strtotime($date));
	$year = date('Y',strtotime($date));
	$d = cal_to_jd(CAL_GREGORIAN , $month , $day , $year);
	$d = JDDayOfWeek($d,1);
	return $d;
}

$date = "2016/2/26 5:36:20";
echo get_Date($date);
?>