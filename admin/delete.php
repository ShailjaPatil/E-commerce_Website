<?php
include_once '../shared/connection.php';

// Delete Product
$pid=$_GET['pid'];
$sql_status=mysqli_query($conn, "delete from products where pid=$pid");
if($sql_status){
    header('location:view_products.php');
}
else{
    echo "Error in deleting, check SQL command";
}
?>