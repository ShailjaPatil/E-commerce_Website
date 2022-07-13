<?php
include_once '../shared/connection.php';
$name=$_POST['name'];
$details=$_POST['details'];
$price=$_POST['price'];
$file_obj=$_FILES['imfile'];
date_default_timezone_set('Asia/Kolkata');
$unique_path='../images/'.date('d_m_y_h_i_s').'.jpg';
move_uploaded_file($file_obj['tmp_name'],$unique_path);
$cmd="insert into products(name,details,price,imgpath) values('$name','$details',$price,'$unique_path')";
$sql_result=mysqli_query($conn,$cmd);
echo "cmd=$cmd";
if($sql_result){
    echo "Product uploaded successfully!";
    header('location:upload_products.html');
}
else {
    echo "Error in uploading product";
}
?>