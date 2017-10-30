<?php

if(isset($_GET['btnSend'])){

	echo $title = trim($_GET['title']);
	echo "<br>";
	echo $email = trim($_GET['email']);
	echo "<br>";
	echo $message = trim($_GET['message']);
	echo "<br>";

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

	print_r($error); 

	if(!empty($error)){
		foreach ($error as $key=>$err) {
			$error[$key] = '<div class="alert alert-danger">'.$err.'</div>';
		}
	}
	//print_r($error);
}

header("Location:index.php");
?>