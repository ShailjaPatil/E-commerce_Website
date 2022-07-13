<!DOCTYPE html>
<html lang="en">
<head>
   <style>
    .container {
        overflow: hidden;
        }
        .bg {
        width:100%;
        color:white;

        height: 200px;
        border-radius: 0 0 100% 100%;
        background-color: rgb(8, 24, 86);
        margin-top:-130px;
        }
        body {
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        }
   </style>
    <title>DRIPPING Edit Product</title>
</head>

<body background="bgone.jpg">
    <div class="container "></div>
    <div class="bg "></div>
    <div class=" mt-3 d-flex justify-content-center align-items-center">  
    <img   src="shoplogo1.jpg" alt="" style="height:60px ;width: 60px;border-radius:10% ">
    <h2 class="ml-1" style="font-family:Georgia, 'Times New Roman', Times, serif;">Shop in your own way!</h2>
    </div>  
</body>
</html>

<?php
include '../shared/boot.html';
include_once '../shared/connection.php';
$pid=$_GET['pid'];

// Edit/Update Product Details
echo "
<div class='d-flex justify-content-center align-items-center vh-90'>
    <form enctype='multipart/form-data' action='update2.php' method='POST' class='mt-2 p-3 text-center w-50' style='border-radius: 10px; background: rgba(8, 24, 86, 0.272); backdrop-filter: blur(3px);'>
        <h2 style='color: rgb(8, 24, 86);'>EDIT PRODUCT</h2>
        <label><h5>Product Id</h5></label>
        <input type='text' class='mt-3 form-control text-center' name='pid' readonly value='$pid'>
        <input type='text' class='mt-3 form-control' name='name' placeholder='Product Name'>
        <input type='number' class='mt-3 form-control' name='price' placeholder='Product Price'>
        <textarea name='details' placeholder='Product Description' cols='30' rows='3' class='mt-3 form-control'></textarea>
        <input type='file' class=' mt-3 form-control' name='imfile'>
        <input  style='background-color:rgb(8, 24, 86) ;' class='mt-3 btn btn-success' type='submit' value='Update ' >
    </form>
</div>";
?>








    