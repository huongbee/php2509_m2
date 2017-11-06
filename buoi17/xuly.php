<?php
session_start();
/*
admin
admin123
*/

//$_SESSION['username'] = "KPT";
//echo $_SESSION['username'];
//echo $a;
//c1: xóa 1 session
// unset($_SESSION['username']);
// echo "deleted!";

//c2: xóa all
session_destroy();
?>