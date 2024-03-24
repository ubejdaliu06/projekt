<?php 
session_start();
 include 'databaseConn.php';
 include_once 'accesoriesRepository.php'; 
 $p = new accesoriesRepository();
$accesories = $p->getAllaccesories();
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
            background-color: #808080;
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
                if($_SESSION['roli']=="admin"){
                    echo "<li><a href='Dashboard.php'><h3>Dashboard</h3></a></li>";
                    echo "<li><a href='LogOut.php'><h3>Log out</h3></a></li>";
                }else{
                    echo "<li><a href='LogOut.php'><h3>Log out</h3></a></li>";
                   
                }
         
            }
            
            ?></li>
            <li><a href="Log in.php"><h3>Login</h3></a></li>
        </ul>
    </div>

    <div class="First-bracket">
        <div class="titell">
            <h2> SHISHA'S</h2>
        </div>
        <div class="first">
            <div class="Produkt">
                <img src="shisha 1.png " width="150px" height="150px" alt="shisha1">
                <p>Standard Shisha 59.99$</p>
            </div>
            <div class="Produkt">
                <img src="shisha 2.png" width="150px" height="150px" alt="shisha2">
                <p>Black shisha 79.99$</p>
            </div>
            <div class="Produkt">
                <img src="shisha 3.png" width="150px" height="150px" alt="shisha 3">
                <p> Exclusive Shisha 87.99$</p>
            </div>
        </div>
    </div>
    <div class="third">
        <div class="titell">
            <h2>ACCESORIES</h2>
        </div>
        <div class="First-row">
            <div class="Produkt">
                <img src="pica.jpg-removebg-preview.png" width="250px" height="250px" alt="poker">
                <p> Shisha Poker    6.99$ </p>
            </div>
            <div class="Produkt">
                <img src="shisha-accesoires-removebg-preview.png" width="250px" height="250px" alt="gaca">
                <p> Shisha Cole LIMITED EDITION    14.99$ </p>
            </div>
        </div>
    </div>
    <div class="rubrika">
        <?php foreach ($accesories as $as) { ?>
            <a href=""> <img src="<?php echo $as['img']?>" height="200px">
                <p><?php echo $as['Emri']?></p></a> 
        <?php } ?>
    </div>
    <hr>
</div>
</body>
</html>
