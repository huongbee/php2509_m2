<?php

// for( $i=1; $i <= 10; $i++){
//     echo $i.' ';
// }

//1 2 3 4 
//tính tổng các số từ 1->10
$tong = 0;
for($i=1;$i<=10;$i++){
    $tong+=$i; //tong = tong+i
}
//echo $tong;

$tong = 0;
for($i=1;$i<=10;$i++){
    if($i%2==0){
        $tong+=$i; //tong = tong+i
    }
}
//echo $tong;

/*

*
**
***
****
*****
******


      *
     **
    ***
   ****
  *****

*/
// $star = '';
// for($i=1;$i<=6;$i++){
//     echo $star .= "*"; //
//     echo "<br>";
// }

// $arr = ['PHP','iOS','NodeJS','Android','React']; //5
//         //0     1      2         3        4
    
// //echo $arr[2];

// for($i = 0;$i<count($arr); $i++){ 
//     echo $arr[$i];
//     echo "<br>";
// }

// $dem = count($arr);
// for($i = 0;$i<$dem; $i++){ 
//     echo $arr[$i];
//     echo "<br>";
// }



// $arr = ['PHP','iOS','n'=>'NodeJS','a'=>'Android','React']; //5
//         //0     1           n               a       2
// foreach($arr as $key=>$monhoc){
//     echo $monhoc;
//     echo "<br>";
//     // echo $key;
//     // echo "<br>";
// }

// $i = 1;
// while($i<=10){
//     echo $i.' ';
//     $i++;
// }


// $i = 10;
// $tong = 0;
// while($i<10){
//     $tong+=$i;
//     $i++;
// }
// echo $tong;

$i = 10;
$tong = 0;
do{
    $tong+=$i;
    $i++;
}
while($i<10);
echo $tong;



?>