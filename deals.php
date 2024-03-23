<?php 
session_start();
 include 'databaseConn.php';
 include_once 'ShishaRepository.php'; 
 $p = new ShishaRepository();
$shisha = $p->getAllShisha();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Goat Vape - Best Deals</title>
  
    
    <style>
        /* Reset styles */
        body, h1, h2, h3, h4, h5, h6, p, ul, li {
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        /* Main container */
        .main1 {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        .dd{
      background-image:url(AdobeStock_277931111_Preview.jpeg);
      color: red;
      display: flex;
      margin: 0.04%;
      justify-content: center; 
      padding: 0.04%;
      margin: 2%;
      border-radius: 9px;
     
  }
 .headerii{
  width:100% ;
  height: 60px;
  padding: 0 40px;
  box-sizing: border-box;
  color-scheme:initial;
  border: 1px solid  ;
  border-radius: 10px;
 
 }
 .menu1{
  height: 100%;
      display: flex;
      flex-direction: row;
      align-items: center;
      justify-content: flex-end;
      color: black;
      gap: 50px;
      list-style: none;
      
      
 }
.menu1>li>a{
  color: black;
  position: relative;
  text-decoration: none;
 }
 li>a:after{
  content:"";
  position: absolute;
  width: 100%;
  transform: scaleX(0);
  height: 2px;
  bottom: -4px;
  left: 0;
  background-color: black;
  transform-origin: bottom right;
  transition:transform 0.3s ease-out;

 }
 li>a:hover:after{
  transform: scaleX(1);
  transform-origin: bottom left;
 }
  
  .headeri{
    width: 100%;
    height: 0%;
    
      display: flex;
      flex-direction:column;
      justify-content: center;
      align-items: center;
     
      margin: 00 0px;
      padding: 20px 30;
  }

        /* Header */
        .dd {
            background-color: #ff9999;
            text-align: center;
            padding: 10px 0;
        }

        .menu {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
        }

        .headeri img {
            height: 180px;
        }

        .catalog h2 {
            font-size: 24px;
            margin-left: 10px;
        }

        .headerii {
            background-color: #333;
            padding: 10px;
            color: #ffffff;
            margin-top: 20px;
        }

        .menu1 {
            list-style-type: none;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 0;
            margin: 0;
        }

        .menu1 li {
            margin-right: 20px;
        }

        /* Deals section */
        .new {
            margin-top: 40px;
            text-align: center;
        }

        .new1 h2 {
            font-size: 36px;
            margin-bottom: 20px;
        }

        /* Deal images */
        .photo-container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            margin-bottom: 20px;
        }

        .photo-container a {
            margin: 10px;
        }

        .photo-container img {
            height: 200px;
        }

        /* Discount label */
        .yy1 {
            text-align: center;
            margin-bottom: 40px;
        }

        /* Gratis Offer section */
        .g2 {
            text-align: center;
            margin-bottom: 20px;
        }

        /* Footer */
        hr {
            margin-top: 40px;
            border: none;
            border-top: 1px solid #ccc;
        }
    </style>
</head>
<body>
<div class="main1">
    <div class="dd">
        <h3>WARNING: This product contains nicotine. Nicotine is an addictive chemical.</h3>
    </div>
    <div class="menu">
        <div class="headeri">
            <img src="Download1-removebg-preview.png" alt="The Goat Vape Logo">
            <div class="catalog"> 
                <h2>The Goat Vape</h2>
            </div>
        </div>
    </div>
    <div class="headerii">
        <ul class="menu1">
        
        <li><a href="deals.php"><h3>Best Deals</h3></a></li>
            <li><a href="contactus.php"><h3>Contact Us</h3></a></li>
            <li><a href="PajisjetNeShitje1.php"><h3>Shop</h3></a></li>
            <li><a href="aboutus.php"><h3>About us</h3></a></li>
            <li><a href="projekt.php"><h3>Home Page</h3></a></li>
            </li>  <?php 
            if(isset($_SESSION['roli'])){
             
                    echo "<li><a href='LogOut.php'><h3>Log out</h3></a></li>";
                }
            
         
            ?></li>
            <li><a href="Log in.php"><h3>Login</h3></a></li>
        </ul>
       
    </div>

    <div class="new">
        <div class="new1">
           <h2>Best Deals</h2>
        </div>
        <div class="photo-container">
            <a href=""><img src="elf-bar-600-bubble-tea-e-zigarette-vape-stick-20-mg-alle-neuen-sorten-guenstig-online-kaufen-hookain-e-shisha-onlineshop.webp" alt="Deal 1"></a>
            <a href=""><img src="u6-removebg-preview.png" alt="Deal 2"></a>
            <a href=""><img src="u4-removebg-preview.png" alt="Deal 3"></a>
            <a href=""><img src="u3-removebg-preview.png" alt="Deal 4"></a>
        </div>
        <div class="yy1">
            <h2>20% off</h2>
        </div>

    <div class="g2">
        <h2>Gratis Offer 1+1</h2>
    </div>

    <div class="photo-container">
    <?php foreach ($shisha as $shishat) { ?>
        
        <a href=""> <img src="<?php echo $shishat['img']?>" height="200px">
            <p><?php echo $shishat['Emri']?></p></a> 
        
    
        <?php } ?>

    </div>
</div>

<hr>
<script src="deals.js"></script>
</body>
</html>
