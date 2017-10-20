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

$mangsp = array(
	"1"=>array("TenSP"=>"iPhone X","Hinh"=>"https://cdn.tgdd.vn/Products/Images/42/93709/iphone-7-plus-red-128gb-400x460.png","Gia"=>30000000),
	"2"=>array("TenSP"=>"iPhone 6","Hinh"=>"https://cdn.tgdd.vn/Products/Images/42/87839/iphone-7-plus-128gb-de-400x460.png","Gia"=>40000000),
	"3"=>array("TenSP"=>"iPhone 7","Hinh"=>"https://cdn.tgdd.vn/Products/Images/42/73703/iphone-6s-128gb-hong-1-400x450.png","Gia"=>50000000),
	"4"=>array("TenSP"=>"iPhone 8","Hinh"=>"https://cdn.tgdd.vn/Products/Images/42/113126/sony-xperia-xz-premium-pink-gold-400x460.png","Gia"=>60000000),
	"5"=>array("TenSP"=>"iPhone 9","Hinh"=>"https://cdn.tgdd.vn/Products/Images/42/87839/iphone-7-plus-128gb-de-400x460.png","Gia"=>70000000),
	"6"=>array("TenSP"=>"iPhone ","Hinh"=>"https://cdn.tgdd.vn/Products/Images/42/103241/htc-u11-1-400x460.png","Gia"=>80000000)
);

?>