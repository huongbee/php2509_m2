<?php
session_start();
/*
admin
md5('admin123'); //0192023a7bbd73250516f069df18b500
*/

//$_SESSION['username'] = "KPT";
//echo $_SESSION['username'];
//echo $a;
//c1: xóa 1 session
// unset($_SESSION['username']);
// echo "deleted!";

//c2: xóa all
//session_destroy();
//echo md5('admin123');

if(isset($_POST['btnSend'])){

	$_SESSION['username'] = trim($_POST['username']);
	$_SESSION['password'] = md5(trim($_POST['password']));
	//echo $_SESSION['username'];

	if($_SESSION['username'] == "admin" && $_SESSION['password'] == md5('admin123')){
		//đăng nhập thành công
		if(isset($_SESSION['error']))
			unset($_SESSION['error']);

		header("location:admin.php");
	}
	else{
		//sai thông tin
		$_SESSION['error'] = "Sai thông tin đăng nhập";
		header("location:login.php");
	}
}
else{
	header("location:login.php");
}

?>