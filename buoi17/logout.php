<?php
session_start();

session_destroy();

setcookie('username',"admin",time()-120);
setcookie('password',md5('admin123'),time()-120);

header("location:login.php");


?>