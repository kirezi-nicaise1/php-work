<?php
session_start();//to ensure u are using same session
session_destroy();//destroy session
header("location:login.html");//to redirect back to login.php
exit();
?>