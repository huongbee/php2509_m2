<?php
session_start();

//chưa tồn tại session
//
if(!isset($_SESSION['username']) || !isset($_SESSION['password'])){

	//không tồn tại Cookie || cookie sai acc
	if(!isset($_COOKIE['username']) || $_COOKIE['username'] !="admin-cookie"){
		header("location:login.php");
	}
	
}
//có tồn tại, nhưng mà sai thông tin acc
elseif($_SESSION['username'] != "admin" || $_SESSION['password'] != "111111"){
	header("location:login.php");
}

//có tồn tại,  đúng thông tin acc
?>
welcome <?=isset($_SESSION['username']) ? $_SESSION['username'] : $_COOKIE['username'] ?> to admin page!
<hr>
<a href="logout.php">Logout</a>