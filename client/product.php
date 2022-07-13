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
        .button1{
          background: rgba(255, 250, 250, 0.200); 
          backdrop-filter: blur(3px);
          border:none;
          color:white;
          border-radius: 3px;
          width: 100px;
          height:30px;
       }
       .card-title{
            color:rgb(8, 24, 86);
        }
        .card-price
        {
            font-size:22px;
            font-weight:900;
        }
        .rupee
        {
            font-size:18px;
            color:grey;
        }
        .card-img
        {
            width: 400px;
            height:500px;
        }
        .foo1{
           border-radius: 10px;
           height: 200px;
           width: 99%;
           background-color: rgb(8, 24, 86);
           color:white;
       }
       .foo2{
          height: 20%;
          width: 99%;
          border-radius: 10px;
          background: rgba(8, 24, 86, 0.272); 
          backdrop-filter: blur(3px);
          color:rgb(8, 24, 86);  
      }
       th{
           width:300px;
           height: 60px;
       }
       td{
           width:300px;
       }
    </style>
    <title>Document</title>
</head>

<body>
<div class="container ">
    <div class='d-flex justify-content-center mt-1 ml-3'>
        <div class='btn '>
        <a href='#'><button class='button1'>Fashion</button></a>
        <a href='#'><button class='button1'>Elecronics</button></a>
        <a href='#'><button class='button1'>Books</button></a>
        <a href='#'><button class='button1'>Mobiles</button></a> 
    </div>
    <h3 class='ml-2' style="color:white;" >Shopping made easy, Download the app now !!</h3>
    </div>
    </div>
    <div class="bg "></div>
    <div class=" mt-3 d-flex justify-content-center align-items-center">
    <img   src="shoplogo1.jpg" alt="" style="height:70px ;width: 70px;border-radius:10% ">
    <h2 class="ml-1" style="font-family:Georgia, 'Times New Roman', Times, serif;">Shop in your own way!</h2>
    </div>
</body>
</html>

<?php
include '../shared/boot.html';
include_once '../shared/connection.php';
$pid=$_GET['pid'];
$sql_obj=mysqli_query($conn,"select * from products where pid=$pid;");
$row=mysqli_fetch_assoc($sql_obj);
    $name=$row['name'];
    $details=$row['details'];
    $price=$row['price'];
    $impath=$row['imgpath'];
echo "
<div class='container '>
  <div class='row'>
    <div class='p-2'>
     <img class='card-img-top card-img' src='$impath' >
    </div>
    <div class='col p-4' style='border-radius: 10px; background: rgba(0, 150, 255, 0.272); backdrop-filter: blur(3px);'>
    <h1 class='m-0 card-title'>$name</h1><br>
    <h5 class='m-0 card-text'>$details</h5><br>
    <ul class='p-2'>
        <li>Lorem Ipsum is simply dummy text of the printing and 
        typesetting industry. when an unknown 
        printer took a galley of type and scrambled it to make a 
        type specimen book.</li><br>

        <li>Lorem Ipsum is simply dummy text of the printing and 
        typesetting industry. Lorem Ipsum has been the industry's 
        standard dummy text ever since the 1500s,</li><br>

        <li>Lorem Ipsum is simply dummy text of the printing and 
        typesetting industry. Lorem Ipsum has been the industry's 
        standard dummy text ever since the 1500s, when an unknown 
        printer took a galley of type and scrambled it to make a 
        type specimen book.</li>

    </ul>
    <p class='m-0 card-price text-danger'> 
         <span class='rupee'>Rs.</span> $price/-
    </p>
    </div>
  </div>
</div> ";
echo "<div class=' mt-3 ml-2 p-4 d-flex  foo1'>
        <table style='width=100%' class='ml-5 mt-0'>
          <tr>
              <th >Get to Know Us</th>
              <th >Connect with Us</th>
              <th >Make Money with Us</th>
              <th >Let Us Help You</th>
          </tr>
          <tr>
              <td >About US</td>
              <td >Facebook</td>
              <td >Sell on DRIPPING</td>
              <td >Covid-19 and DRIPPING</td>
          </tr>
          <tr>
              <td >Carrers</td>
              <td >Twitter</td>
              <td >DRIPPING Global selling</td>
              <td >Return Center</td>
          </tr>
          <tr>
              <td >Press Releases</td>
              <td >Instagram</td>
              <td >Become an Affiliate</td>
              <td>100% Purchase Protection</td>
          </tr>
      </table>
   </div>
   <div class='foo2 p-1 ml-2'>
   <div class=' mt-2 d-flex justify-content-center align-items-center'>
   <img   src='shoplogo1.jpg'style='height:70px ;width: 70px;border-radius:10% '>
   <h2 class='ml-1' style='font-family:Georgia, 'Times New Roman', Times, serif;'>Shop in your own way!</h2>
   </div> ";
?>