<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .cart-text{
            top:0;
            right:0;
            background-color:red;
            width:25px;
            height:25px;
            border-radius:50%;
        }
    </style>
</head>
<body>
</body>
</html>

<?php
session_start();
if( ! isset($_SESSION['login_status'])){
    echo "<h3> Login First";
    die;
}
$login_status=$_SESSION['login_status'];
if($login_status=="failed"){
    echo "<h3> Unauthorised Atempt to Login";
    die;
}
$username=$_SESSION['username'];
$localcart=$_SESSION['cart'];
$cart_count=count($localcart);
echo "<div class='d-flex justify-content-between  align-items-center'> 
    <div style='color:white;' class='ml-4 mr-4 d-flex justify-content-center align-items-center'> 
    <h4>Hi $username.</h4>
    <a href='viewcart.php'>
    <button class='btn  position-relative ml-5' style='color:white;'>
    <i class='fa fa-2x fa-shopping-cart'> </i>
    <span class='cart-text position-absolute'>$cart_count</span>
    </button>
    </a>
    <div> 
        <button class='btn  ml-5'>
            <a href='logout.php' class=' text-white'>
                 <i class='fa fa-sign-out fa-2x'> </i>  
            </a>    
        </button>
    </div>
    </div>
</div>"
?>