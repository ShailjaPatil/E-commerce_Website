<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .check{
        position: absolute;
        top: 50%;
        left: 50%;
        transform:translate(-50%,-50%) ; 
        }
        .dtext{
        position: absolute;
        top: 70%;
        left: 50%;
        transform:translate(-50%,-50%) ; 
        }
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

<body style="background-color:#fffafa;">
    <div class="container "></div>
    <div class="bg "></div>
    <div class=" mt-3 d-flex justify-content-center align-items-center">
    <img  src="shoplogo1.jpg" alt="" style="height:70px ;width: 70px;border-radius:10% ">
    <h2 class="ml-1" style="font-family:Georgia, 'Times New Roman', Times, serif;">Shop in your own way!</h2>
    </div> 
</body>
</html>

<?php
include_once '../shared/boot.html';
echo "<div>
<i class='check mt-5 fa fa-check-square-o fa-5x' aria-hidden='true'></i>
<br>
<h2 class='dtext'> Your order is successfully placed.</h2>
<script>
         setTimeout(function(){
            window.location.href = 'view_products.php';
         }, 2000);
      </script>
</div>";
?>



