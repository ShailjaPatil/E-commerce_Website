<?php
include_once '../shared/connection.php';
$pid=$_GET['pid'];
session_start();
$localcart=$_SESSION['cart'];
$sql_status=mysqli_query($conn, "delete from orders where pid=$pid");
if($sql_status){
    $key=array_search($pid,$localcart);
    unset($localcart[$key]);
    $localcart=array_values($localcart);
    $_SESSION['cart']=$localcart;  
    $value=count($localcart);
    if($value==0){
        echo "Your Cart is empty";
        header('location:view_products.php');
    }
    else{
    header('location:viewcart.php');
    }
}
else{
    echo "Error in deleting, check SQL command";
}
?>