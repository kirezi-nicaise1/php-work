<?php
include"connection_db.php";

//process the login form data
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username=$_POST['username'];
    $password=$_POST['password'];

//QUERY THE DATABASE TO SEE IF THE USER EXISTS AND
$result=mysqli->query("SELECT * FROM student_db WHERE username='$username' AND password='$password'");
if(!$result){
    echo"error".$mysqli->error;
    exit();
}

if($result->num_rows>0){
    session_start();
    $_SESSION['username']=$username;
    header('Location:homepage.php');
}
}
?>