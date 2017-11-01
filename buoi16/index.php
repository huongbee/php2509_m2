<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Upload File</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
</head>
<?php

if(isset($_POST['btnSend'])){

	$file = $_FILES['file_upload'];

	echo"<pre>";
	print_r($file);
	echo"</pre>";

	//echo $file['name'];
	
	$tmpname = $file['tmp_name'];

	if($file['size'] > 49999000){ //1kb
		echo "File quá lớn";

	}

	else{
		$arrExt = ['.png', '.jpg', '.gif'];
		//png
		$vitriEnd = strripos($file['name'], '.');
		echo $ext = strtolower(substr($file['name'],$vitriEnd)); //.png

		if(!in_array($ext, $arrExt)){
			echo "File ko được phép chọn";
		}

		else{
			$name = substr($file['name'], 0,$vitriEnd);
			$newName = $name.'-'.time().rand(121212,23131311).$ext;
			$path = "datas/$newName";
			move_uploaded_file($tmpname, $path);

			echo 'thành công';
		}
	}

	/*
	

	2.check filesize: cho phép <= 1Mb
	3.chỉ cho phép upload file ảnh (png, jpg, gif)
	1.đổi tên file trước khi upload

	*/
	
	///unlink('datas/1.jpg'); xóa file khỏi folder
	// if(file_exists($tmpname)){
	// 	echo "thành công";
	// }
	// else{
	// 	echo " ko thành công";
	// }

	
}
?>
<body>
	<div class="container">
		<form method="POST" enctype="multipart/form-data">

			<input type="file" name="file_upload" accept="image/*">
			<button type="submit" name="btnSend" class="btn btn-primary">Upload</button>

		</form>
	</div>
</body>
</html>