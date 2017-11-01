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
	$path = "datas/$file[name]";
	$tmpname = $file['tmp_name'];

	if($file['size'] > 499990){ //1kb
		echo "File quá lớn";

	}
	else{
		move_uploaded_file($tmpname, $path);

		if(file_exists($path)){	
			
			echo "thành công";
		}
		else{
			echo " ko thành công";
		}
	}
	/*
	

	2.check filesize: cho phép <= 1Mb
	3.chỉ cho phép upload file ảnh (png, jpg, gif)
	1.đổi tên file trước khi upload

	*/
	
	///unlink('datas/1.jpg'); xóa file khỏi folder
	// if(file_exists($path)){
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