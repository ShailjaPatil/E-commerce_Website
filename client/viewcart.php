<!DOCTYPE html>
<html lang="en">
<head>
    <title>DRIPPING cart</title>
    <style>
        .card-head
        {
            width:200px; 
            box-shadow: -8px 6px 16px 0px rgba(46,48,46,1);
        }
        .card-head:hover
        {
            box-shadow: -8px 6px 16px 0px rgba(89,78,146,1);
            transition:0.1s all;
        }
        .card-img
        {
            width:100px !important ;
            height:100px;
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
        .price-input{
            border:none;
            font-size:36px;
            background-color:transparent;
        }
        .card-class{
            width: 300px;
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
        .foo1{
           
           border-radius: 10px;
           height: 200px;
           width: 96%;
           background-color: rgb(8, 24, 86);  
           color:white;
       }
       .foo2{         
          height: 20%;
          width: 96%;
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
</head>

<body style="background-color:#fffafa;">
    <div class="container "></div>
    <div class="bg "></div>
    <div class=" mt-3 d-flex justify-content-start " style='column-gap: 400px;'>
    <a href='view_products.php'  >
            <i style='float:left;color:rgb(8, 24, 86);' class=' ml-4  fa fa-arrow-left fa-2x'> </i>  
    </a> 
    <div class=" mt-3 d-flex justify-content-center align-items-center">
        <img   src="shoplogo1.jpg" alt="" style="height:70px ;width: 70px;border-radius:10% ">
        <h2 class="ml-1" style="font-family:Georgia, 'Times New Roman', Times, serif;">Shop in your own way!</h2>
    </div>
    </div>
</body>
</html>

<?php
include '../shared/boot.html';
include '../shared/connection.php';
session_start();
$localcart=$_SESSION['cart'];
$pid_str=implode(",",$localcart);
$cmd="select *from products where pid in ($pid_str)";
$sql_obj=mysqli_query($conn,$cmd);
$total_rows=mysqli_num_rows($sql_obj);
echo "<div class='d-flex '>";
echo "<div class='w-75 '>";
$total=0;
for($i=0;$i<$total_rows;$i++){
    $row=mysqli_fetch_assoc($sql_obj);
    $pid=$row['pid'];
    $name=$row['name'];
    $details=$row['details'];
    $price=$row['price'];
    $impath=$row['imgpath'];
    $total+=$price;
    echo "    
            <div class='ml-3 mt-3 p-2  d-flex justify-content-space-between align-item-center' >
                 <img class='card-img-top card-img' src='$impath' >
                <div class=' d-flex card-body '>
                <div class='card-class'>
                    <h4 style='color:rgb(8, 24, 86);' class='m-0 card-title'>$name</h4>
                    <p class='m-0 card-price text-danger'> 
                        <span class='rupee'>Rs.</span> $price</p>
                    <p class='m-0 card-text'>$details</p>
                </div>
                    <div class='ml-5'>
                    <a href='deleteC.php?pid=$pid' >
                    <button style='background-color:rgb(8, 24, 86);color:white;' class='ml-5 btn'>Remove from cart</button>
                    </a>
                    </div>   
                </div>
            </div>";
}
echo "</div>";
echo "<div class='w-25 p-4 ' style='background-color:rgb(8, 24, 86);color:white;'>
<form method='post' action='placeorder.php'>
            <h2>Total price in Rs</h2>
            <input name='total' class='price-input text-white ' readonly value='$total/-'>
            <textarea cols='30' rows='4' name='address' class='mt-3 form-control' placeholder='Delivery address'></textarea>
            <input style='background: rgba(255, 250, 250, 0.200); 
            backdrop-filter: blur(3px); border:2px solid white;' class='mt-3 btn text-white' type='submit' value='Place Order'>
</form>
</div>";
echo "</div>";
echo "<div class=' mt-3 ml-4 mr-4  p-4 d-flex  foo1'>
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
 <div class=' ml-4  mr-4 foo2 p-1'>
 <div class=' mt-2 d-flex justify-content-center align-items-center'>
 <img   src='shoplogo1.jpg'style='height:70px ;width: 70px;border-radius:10% '>
 <h2 class='ml-1' style='font-family:Georgia, 'Times New Roman', Times, serif;'>Shop in your own way!</h2>
 </div> ";
?>