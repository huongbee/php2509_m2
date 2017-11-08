<?php
session_start();

// $s = $_SERVER;
// print_r($s);

if(isset($_POST['btnSend']) || $_SERVER['REQUEST_METHOD'] === "POST"){
	//lây data từ form
	$username = trim($_POST['username']);
	$password = trim($_POST['password']);

	//compair acc
	if($username == "admin" && $password=='111111'){
		//đúng: 
		//setup session
		$_SESSION['username'] = $username;
		$_SESSION['password'] = $password;

		//kiểm tra có nhấn remember?
		if(isset($_POST['remember'] ) && $_POST['remember'] == 1){
			setcookie('username','admin-cookie',time()+120);
		}
		//đi về trang admin
		header("location:admin.php");
	}
	else{
		//$_SESSION['error'] = "Sai thông tin đăng nhập";
		setcookie('error',"Sai thông tin đăng nhập",time()+2) ;

		//về lại login để login lại
		header("location:login.php");
	}
}
else
	//ko phải gửi từ form, gửi từ url: get
	//về lại login để login lại
	header("location:login.php");

?>