<?php
include_once '../shared/connection.php';
$username=$_POST['username'];
$mobile=$_POST['mobile'];
$password1=$_POST['password1'];
$password2=$_POST['password2'];
if($password1!=$password2){
    echo "<h3>Mismatch Password</h3>";
    die;
}

// Inserting New User in data base
$cmd="insert into users(Username,mobile,Password) values('$username','$mobile','$password1')";
echo "<br> cmd=$cmd";
$sql_result=mysqli_query($conn,$cmd);
if($sql_result){
    header('location:login2.html');
}
else{
    echo "<h3>$username already exists<br> Try another username</h3><br>
    <a href='registration.html'>Register Again<a>";
    die;
}
?>