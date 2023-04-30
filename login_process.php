<?php
if(isset($_POST['submit'])){
    //retrieve the usre's input
    $username=$_POST['username'];
    $password=$_POST['password'];

    //validte the user's credentials
    if($username =='admin'&& $password =='admin@123'){
        //start a new session 
        session_start();
        //set session variables
        $_SESSION['username']=$username;
        //redirect the user to the homepage
        header('Location: homepage.php');
    }else{
        //display an error message
        echo"<p>invalid username or password.</p>";
    }
}
?>