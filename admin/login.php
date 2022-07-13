<?php
session_start();
$username=$_POST['username'];
$password=$_POST['password'];

// Verification of Admin Login Details
if($username=='Admin1' && $password=='admin'){
    $_SESSION['login_status']="success";
    $_SESSION['username']=$username;
    echo "<h2> jai hooo</h2>";
    header('location:selectOpt.php');
}
else{
    $_SESSION['login_status']="failed";
    echo "<h2> Invalid credentials </h2>";
}
?>