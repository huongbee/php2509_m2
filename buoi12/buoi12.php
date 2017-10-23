<?php


// $str = "Hôm, nay, em, đi, chăn, trâu";
// //echo $str;
// //$arr = explode(' ', $str);
// $arr = explode(', ', $str);

// //print_r($arr);

// $str2 = implode('-',$arr);
// echo $str2;

// $url = "https://www.thegioididong.com/laptop/lenovo-ideapad-120s-11iap";
// $youtube = "https://www.youtube.com/watch?v=RpwQvArzv0g";


// $arrUrl = explode('/', $url);
// //print_r($arrUrl);
// $name = $arrUrl[4];
// $name = explode('-', $name);
// //print_r($name);

// $name = implode(' ', $name);
// echo ucfirst($name);

$array = ['PHP','iOS','NodeJS','Android'];
//nếu có => iOS
//không => thông báo
//echo array_search('âaiOS', $array);

/*	
	if(array_search('iOS', $array) != false){
		echo "tồn tại";
	}
	else echo 'không tồn tại';

	if(in_array('isOS', $array) != false){
		echo "tồn tại";
	}
	else echo 'không tồn tại';

	if(array_key_exists(2, $array) != false){
		echo "tồn tại";
	}
	else echo 'không tồn tại';
*/

//array_splice($array, 0,0,'React');
//array_splice($array, 2, 1,'React');

	$arr2 = ['React','JS'];
	
array_splice($array, 2, 1,$arr2);

print_r($array);


?>