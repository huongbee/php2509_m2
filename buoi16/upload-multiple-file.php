<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Upload File</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
</head>
<?php

// $arr = Array
// (	'D:\xampp\tmp\php1963.tmp',
// 	'D:\xampp\tmp\php1973.tmp',
// 	'D:\xampp\tmp\php1984.tmp',
// 	'D:\xampp\tmp\php19A4.tmp',
// 	'D:\xampp\tmp\php19B5.tmp'
// );
// echo "<pre>";
// print_r($arr);
// echo "</pre>";


//die;
if(isset($_POST['btnSend'])){

	$file = $_FILES['file_upload'];

	// echo "<pre>";
	// print_r($file);
	// echo "</pre>";

	// foreach($file as $key=>$value){
	// 	echo $key;
	// 	echo "<br>";
	// 	echo "<pre>";
	// 	print_r($value);
	// 	echo "</pre>";
	// }
	// die;
	$flag = true;
	foreach($file['size'] as $size){
		if($size > 1024000){//1000kb
			$flag = false;
			break;
		}
	}
	//var_dump($flag);
	// 1: true
	// 2: false return
	// 3: true
	//die;
	if($flag){
		foreach($file['name'] as $key=>$name){
			$arrExt = ['.png','.gif'];
			$vitriEnd = strripos($name, '.');
			$ext = strtolower(substr($name,$vitriEnd));
			if(!in_array($ext,$arrExt)){
				$flag = false;
			}
		}
		if($flag){
			foreach($file['tmp_name'] as $key=>$ten_tam){
				$name = $file['name'][$key];
				move_uploaded_file($ten_tam, "datas/$name");
				echo "thành công";
			}
		}
		else{
			echo "file ko được phép chọn, chỉ cho phép file có định dạng là: ";
			foreach($arrExt as $type){
				echo $type. ' ';
			}
		}
	}
	else{
		echo "file quá lớn, vui lòng kiểm tra lại, cho phép file tối đa là 100kb";
	}
	

}
?>
<body>
	<div class="container">
		<form method="POST" enctype="multipart/form-data">
			<input type="file" name="file_upload[]" accept="image/*" multiple>
			<button type="submit" name="btnSend" class="btn btn-primary">Upload</button>
		</form>
	</div>
</body>
</html>