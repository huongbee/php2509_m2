<?php
session_start();
if(!isset($_SESSION['username']) || !isset($_SESSION['password']) || $_SESSION['username'] != "admin" || $_SESSION['password'] != md5('admin123')){
	header("location:login.php");
}

echo "Chào bạn ".$_SESSION['username'];

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Admin Page</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<br>
	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	<div><a href="logout.php">Login out</a></div>
</body>
</html>