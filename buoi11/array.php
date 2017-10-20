<?php

//$arr = [1, 4, '5',"khoa"=>'Hello', true];

// foreach($arr as $value){
//     echo $value;
//     echo "<br>";
// }

//mangr 2 chieeu
$array = [
            'frontend' => ['HTML','CSS','JS'],
            'backend'  => ['PHP','MySQL'],
            'back_end'  => ['PHP','MySQL1']
        ];

$f = $array['frontend'];
//echo $f[0];
//$array['frontend'][0];

// foreach ($array as $key => $value) {
//     foreach($value as $monhoc){
//         echo $monhoc;
//         echo "<br>";
//     }
// }
echo "Chi tiết môn học:<br>";
foreach ($array as $key => $value) {
    echo "- $key:";
    foreach($value as $monhoc){
        echo " ";
        echo $monhoc;
        
    }
    echo "<br>";
}

// $array = [
//     'frontend' => [
//         'HTML',
//         'CSS',
//         'JS'
//     ],
//     'backend'  => [
//         'PHP' => [
//             'array',
//             'object',
//             'string'
//         ],
//         'MySQL' => [
//             'select',
//             'insert'
//         ]
//     ]
// ];
// echo "<pre>";
// print_r($array);
// echo "</pre>";
// die;

// $f = $array['frontend'];
// //echo $f[0];
// //$array['frontend'][0];

// foreach ($array as $key => $value) {
// foreach($value as $monhoc){
// echo $monhoc;
// echo "<br>";
// }
// }

?>