<!DOCTYPE html>
<html lang="en">
<head>
    <title>DRIPPING Home </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <style>
        .container {
        overflow: hidden;
        }
        .bg {
        width:100%;
        height: 200px;
        border-radius: 0 0 100% 100%;
        background-color: rgb(8, 24, 86);
        margin-top:-130px;
        }
        .logo{
            align-self: center;
        }
    </style>
</head>

<body style="background-color:#fffafa;" >
<!-- Header -->
    <div class="container "></div>
    <div class="bg "></div>
    <div class=" mt-3 d-flex justify-content-center align-items-center">
    <img   src="shoplogo1.jpg" alt="" style="height:100px ;width: 100px;border-radius:10% ">
    <h2 class="ml-1" style="font-family:Georgia, 'Times New Roman', Times, serif;">Shop in your own way!</h2>
    </div>    
</body>
</html>

<?php
session_start();
$username=$_SESSION['username'];
echo "
    <div class='mt-3 d-flex justify-content-center align-items-center'> 
    <h3>Hi $username.  Select an option </h3>
    </div>
    <div class='mt-3 d-flex justify-content-center align-items-center'> 
    <a href='upload_products.html'><button style='background-color:rgb(8, 24, 86) ;' class='mt-3 mr-3 btn btn-success'>Upload Product</button></a>
    <a href='view_products.php'><button style='background-color:rgb(8, 24, 86) ;' class='mt-3 btn btn-success'>View Products</button></a>
    </div>
    <div class='mt-3 d-flex justify-content-center align-items-center'>
    <img style='height: 250px;width: 300px;' src='shopbags.webp' >
    </div>";
?>