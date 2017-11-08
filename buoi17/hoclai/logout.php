<?php
session_start();


//c1:
//hủy session theo tên
unset($_SESSION['username']);
unset($_SESSION['password']);

//hủy cookie đã tạo ở xuly.php:
//hủy bằng cách setup value khác cho cùng 1 tên, time âm
setcookie('username','12345',time()-120);

//setcookie('username','admin-cookie',time()+120);


//c2
//hủy all session
session_destroy();
header("Location:login.php");

?>