<?php 
session_start();
 include 'databaseConn.php';
 include_once 'accesoriesRepository.php'; 
 $p = new accesoriesRepository();
$accesories = $p->getAllaccesories();
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
       body, h1, h2, h3, h4, h5, h6, p, ul, li {
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
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
 .main1 {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        .main1 {
            background-color: #ffffff;
            padding: 20px;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
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
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .menu {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .headeri img {
            height: 180px;
        }

        .catalog h2 {
            font-size: 24px;
            margin-left: 10px;
        }

        .headerii {
            background-color: #808080;
            padding: 10px;
            color: #ffffff;
            margin-top: 20px;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
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

        /* Product sections */
        .titell {
            text-align: center;
            margin-bottom: 20px;
        }

        .first, .First-row {
            display: flex;
            justify-content: center;
            gap: 20px;
        }
        .first{
            display:flex;
            gap:80px;
            justify-content:center;
            text-align: center;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            flex-wrap: wrap;
        }

        .Produkt {
            text-align: center;
            
        }

        .Produkt img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
        }

        .Produkt p {
            margin: 10px 0;
            font-size: 18px;
        }

        /* Accessories section */
        .rubrika {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
        }

        .rubrika img {
            margin: 10px;
            border-radius: 10px;
        }

        /* Divider */
        hr {
            width: 80%;
            margin: 20px auto;
            border: none;
            border-top: 2px solid #ddd;
        }
        .f {
            background-color: #333;
            color: #ffffff;
            padding: 20px;
            margin-top: 40px;
        }

        .ff {
            text-align: center;
            margin-bottom: 20px;
        }

        .f6 a {
            margin: 0 10px;
        }

        .end {
            background-color: #333;
            color: #ffffff;
            padding: 20px;
            margin-top: 40px;
            text-align: center;
        }
        a{
            text-decoration:none;
            color:black;
        }
    </style>
</head>
<body>
<div class="main1">
    <div class="dd">
        <h3>WARNING: This product contains nicotine. Nicotine is an addictive chemical.</h3>
    </div>
    <div class="menu">
       <a href="projekt.php" style="text-decoration:none; color:black;"> <div class="headeri">
            <img src="Download1-removebg-preview.png" alt="The Goat Vape Logo">
            <div class="catalog"> 
                <h2>The Goat Vape</h2>
            </div>
        </div></a> 
    </div>
    <div class="headerii">
        <ul class="menu1">
            <li><a href="deals.php"><h3>Best Deals</h3></a></li>
            <li><a href="contactus.php"><h3>Contact Us</h3></a></li>
            <li><a href="PajisjetNeShitje1.php"><h3>Shop</h3></a></li>
            <li><a href="aboutus.php"><h3>About us</h3></a></li>
            <!-- <li><a href="projekt.php"><h3>Home Page</h3></a></li> -->
           
            </li>     <?php  if(isset($_SESSION['roli'])){
    if($_SESSION['roli']=="admin"){
        echo "<li><a href='Dashboard.php'><h3>Dashboard</h3></a></li>";
        echo "<li><a href='LogOut.php'><h3>Log out</h3></a></li>";
    } else {
        echo "<li><a href='LogOut.php'><h3>Log out</h3></a></li>";
    }
} else {
    // User is not logged in, so display the "Log in" link
    echo "<li><a href='Log in.php'><h3>Log In</h3></a></li>";
    echo "<li><a href='Register.php'><h3>Sign In</h3></a></li>";
}
?></li>
           
        </ul>
    </div>
    <br><br><br><br><br><br>
    <div class="First-bracket">
        <div class="titell">
            <h2> SHISHA'S</h2>
        </div>
        <div class="first">
        <?php foreach ($shisha as $shishat) { ?>
        
        <a href=""> <img src="<?php echo $shishat['img']?>" height="200px">
               <p><?php echo $shishat['Emri']?></p>
               <p><?php echo $shishat['cmimi']?></p>
        </a> 
        
    
        <?php } ?>
            
    </div>
    <br><br><br><br><br>
    <div class="third">
        <div class="titell">
            <h2>ACCESORIES</h2>
        </div>
        <br><br>
        <div class="First-row">
           <br><br>
            <div class="first">
        <?php foreach ($accesories as $as) { ?>
            <a href=""> <img src="<?php echo $as['img']?>" height="200px">
                <p><?php echo $as['Emri']?></p>
                <p><?php echo $as['Cmimi']?></p>
            </a> 

        <?php } ?>
    </div>
        </div>
    </div>
   
    <hr>
</div>
<div class="f">
        <div class="ff">
            <h4>Follow us</h4>
            <div class="f6">
                <a href="https://www.facebook.com/"><img src="facebook.png" alt="Facebook" height="40px"></a>
                <a href="https://twitter.com/i/flow/login"><img src="twitter.png" alt="Twitter" height="40px"></a>
                <a href="https://www.instagram.com/"><img src="instagram.png" alt="" height="40px"></a>
                <a href="https://www.pinterest.com/login/"><img src="pinterest.png" alt="" height="40px"></a>
            </div>
        </div>
    </div>
</body>
</html>
