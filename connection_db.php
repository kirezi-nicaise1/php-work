<?php

$conn= mysqli_connect("localhost","root","2021","student_db");
if(!$conn){
    die("connection failed:");
}
echo"connected successfully";
?>