<?php
include '../shared/boot.html';
include_once '../shared/connection.php';
$name=$_POST['name'];
$pid=$_POST['pid'];
$details=$_POST['details'];
$price=$_POST['price'];
$file_obj=$_FILES['imfile'];
date_default_timezone_set('Asia/Kolkata');
$unique_path='../images/'.date('d_m_y_h_i_s').'.jpg';
move_uploaded_file($file_obj['tmp_name'],$unique_path);
$cmd="update products set name='$name', price=$price, details='$details', imgpath='$unique_path' WHERE pid=$pid";
echo "<br>cmd=$cmd";
$sql_result=mysqli_query($conn,$cmd);
if($sql_result){
    echo '<script>alert("Product Updated Successfully")</script>';
     header('location:view_products.php');
}
else {
    echo "Error in updating product";
}
?>





