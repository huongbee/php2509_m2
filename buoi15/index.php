<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Contact Form</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
</head>
<?php


if(isset($_GET['btnSend'])){

	$title = trim($_GET['title']);
	$email = trim($_GET['email']);
	$message = trim($_GET['message']);


	if($title==""){
		$error['title'] = "Vui lòng nhập tiêu đề";
	}

	if($email == ""){
		$error['email'] = "Vui lòng nhập email";
	}

	elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
		$error['email'] = "Email chưa đúng định dạng";
	}

	if($message == ""){
		$error['message'] = "Vui lòng nhập message";
	}


	$age = $_GET['age'];
	if(!is_numeric($age)){
		$error['age'] = "Vui lòng nhập tuổi là số";
	}

	//print_r($error);

	if(!empty($error)){
		foreach ($error as $key=>$err) {
			$error[$key] = '<div class="alert alert-danger">'.$err.'</div>';
		}
	}
	//print_r($error);
}

?>
<body>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-6 ">
				<h2>Contact Form</h2>
				<form method="GET" action="">
					<div class="form-group">
					    <label for="title">Title</label>
					    <input type="text" name="title" class="form-control" id="title" placeholder="Nhập tiêu đề" value="<?= isset($_GET['title']) ? $_GET['title'] : ''?>">
					    <?=@$error['title']?>
			  		</div>

			  		<div class="form-group">
					    <label for="age">Age</label>
					    <input type="text" name="age" class="form-control" id="age" placeholder="Nhập tuổi" value="<?=@$age?>">
					   	<?=@$error['age']?>
			  		</div>

				  	<div class="form-group">
					    <label for="email">Email address</label>
					    <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com" value="<?=@$email?>">
					    <?=@$error['email']?>
				  	</div>
			 
			  		<div class="form-group">
					    <label for="message">Message</label>
					    <textarea class="form-control" name="message" id="message" rows="5" >
					    	<?=@$message?>
					    </textarea>
					    <?=@$error['message']?>
			  		</div>

			  		<div class="form-group">
					    <button type="submit" class="btn btn-primary" name="btnSend">Gửi</button>
			  		</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>