<?php
include_once 'validate_login.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .card-head
        {
            width:260px;
            box-shadow: -8px 6px 16px 0px rgba(46,48,46,1);
        }
        .card-head:hover
        {
            /* transform:rotate(360deg); */
            box-shadow: -8px 6px 16px 0px rgba(8,24,86,1);
            transition:0.1s all;
        }
        .card-img
        {
            width:inherit;
            height:200px;
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
       .button1{
          background: rgba(255, 250, 250, 0.200); 
          backdrop-filter: blur(3px);
          border:none;
          color:white;
          border-radius: 3px;
          width: 100px;
          height:30px;
       }
    </style>
    <title>DRIPPING Products</title>
</head>

<body background="bgone.jpg">
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
    <img src="shoplogo1.jpg" alt="" style="height:70px ;width: 70px;border-radius:10% ">
    <h2 class="ml-1" style="font-family:Georgia, 'Times New Roman', Times, serif;">Shop in your own way!</h2>
    </div>
</body >
</html>

<?php
include '../shared/boot.html';
include_once '../shared/connection.php';
$sql_obj=mysqli_query($conn,"select * from products");
$total_rows=mysqli_num_rows($sql_obj);
echo "<div class='ml-3 mr-2 d-flex flex-wrap justify-content-start'>";
for($i=0;$i<$total_rows;$i++){
    $row=mysqli_fetch_assoc($sql_obj);
    $pid=$row['pid'];
    $name=$row['name'];
    $details=$row['details'];
    $price=$row['price'];
    $impath=$row['imgpath'];
    echo "    
            <div class='m-4 card card-head' >
                 <img class='card-img-top card-img' src='$impath' >
                <div class='card-body'>
                <div class='d-flex justify-content-between'>
                    <a href='product.php?pid=$pid'><h4 class='m-0 card-title'>$name</h4></a>
                        <a href='addtocart.php?pid=$pid' >
                        <i class='fa fa-cart-plus fa-2x'> </i>  
                        </a>       
                </div>
                    <p class='m-0 card-price text-danger'> 
                        <span class='rupee'>Rs.</span> $price/-</p>
                    <p class='m-0 card-text'>$details</p> 
                </div>
            </div>";
}
echo "</div>";
echo "<div class=' mt-3 p-4 d-flex  foo1'>
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
 <div class='foo2 p-1'>
 <div class=' mt-2 d-flex justify-content-center align-items-center'>
 <img   src='shoplogo1.jpg'style='height:70px ;width: 70px;border-radius:10% '>
 <h2 class='ml-1' style='font-family:Georgia, 'Times New Roman', Times, serif;'>Shop in your own way!</h2>
 </div> ";
?>