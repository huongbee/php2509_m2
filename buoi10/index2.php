<?php

//$a = 2;
// if(isset($a)){
//     echo $a; 
// }
// else{
//     echo "a chưa được định nghĩa";
// } 
// if(!isset($a)){
//     echo "a chưa được định nghĩa";
// }
// else{
//     echo $a; 
// } 

//$arr = [1,2,3,'PHP'];
//$arr = [];
// if(empty($arr)){
//     echo 'mảng rỗng';
// }
// else{
//     echo "<pre>";
//     print_r($arr);
//     echo "</pre>";
// }

// if(!isset($arr)){
//     echo 'mảng rỗng';
// }
// else{
//     echo "<pre>";
//     print_r($arr);
//     echo "</pre>";
// }

$a = '12';
// if(is_numeric($a)){
//     echo $a;
// }
// else{
//     echo "không phải số";
// }

// if(is_int($a)){
//     echo "$a là int";
// }
// else{
//     echo "không phải int";
// }

//echo is_int($a) ? "$a là int" : "không phải int...";





//echo "Max = ". ($c > $b ? $c : $b);

// if($c > $b){
//     echo $c;
// }
// else{
//     echo $b;
// }

$a = 25;
$b = 15;
$c = 6;

//echo "Max = ".(($a > $b  ? $a : $b) > $c ? ($a>$b?$a:$b) : $c);

echo $a > $b ? ($a>$c ? $a: $c) : ($b > $c ? $b : $c);
//a>b ? a : b
//a>b ? c : c


?>