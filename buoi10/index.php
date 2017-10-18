<?php
//require('index2.php');
//require_once('index2.php');
//require_once('index2.php');
//include('index2.php');
//include_once('index2.php');

// define('PI',3.14);
// echo PI;


// $a = 10;
// echo $a;

// $a = 20;
// echo $a;

// $so_du = 5%2; 
// echo $so_du; //1
// echo '<br>';

//$so_du+=$so_du; //$so_du = $so_du + $so_du // 2
//$so_du-=$so_du;  //0
//$so_du--; /$so_du = $so_du - 1
// $so_du++; // $so_du = $so_du + 1
// echo $so_du;


//echo $so_du++; 
//echo ++$so_du;


// $str = "Chào ";
// $name = "A";

// //$str = $str.$name;
// $str.=$name;
// echo $str;

$a = 5; //int
$b = '5'; //string
//echo gettype($a+$b); //int
// if( $a === $b ){
//     echo 'ĐÚNG';
// }
// else{
//     echo "SAI";
// }

// if( $a > $b ){
//     echo 'ĐÚNG';
// }
// else{
//     echo "SAI";
// }




// $a = 5; //int
// $b = '5'; //string
// if( $a !== $b  && $a>$b){ //AND
//     echo "$a khác $b";
// }

// if( $a !== $b || $a>$b){ //OR
//     echo "$a khác $b";
// }
// else{
//     echo "$a không khác $b";
// }


//  ==   ><  !=
//  ===  ><  !==


//    >=
//$a*$a <==> pow($a,2);

$a = 3;
$b = 3;
$c = 3;

if($a+$b>$c && $a+$c>$b && $c+$b>$a ){
    echo "Đây là số đo của 1 tam giác.";
    if(pow($a,2) + pow($b,2) == pow($c,2) || pow($a,2) + pow($c,2) == pow($b,2) 
        || pow($c,2) + pow($b,2) == pow($a,2) || pow($a,2) + pow($b,2) == pow($c,2)){
        echo " Đây là tam giác vuông";
    }
    elseif($a==$b && $b==$c ){
        echo " Đây là tam giác đều";
    }
    elseif($a==$b || $a==$c || $b==$c){
        echo " Đây là tam giác cân";
    }
    else{
        echo " Đây là tam giác thường";
    }
}
else{
    echo "Đây không phải số đo của 1 tam giác";
}






?>