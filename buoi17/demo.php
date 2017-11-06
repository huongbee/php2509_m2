<?php

//cài đặt cookie
setcookie("user","Khoa Phạm",time()+120);

//lấy cookie
echo $_COOKIE['user'];


?>