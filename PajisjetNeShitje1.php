<?php
  
  include "databaseConn.php";
  include_once "VapeRepository.php";
  
  $p = new VapeRepository();
  $vape = $p->getAllVape();
  ?>
<!DOCTYPE html>
<html>
<head>
<title>Shopping Page</title>
<link rel="stylesheet" href="PajisjetNeShitje.css">
</head>
<body>

<div class="Banner">
      
        <h3>WARNING: The Items in our Shop contain nicotine
          Nicotine is an Addictive chemical.!
        </h3>
       

      </div>
     
        <div class="Main" id="sample">
        <div class="headerii">
        <div class="menu1">
             
          
        <li><a href="projekt.php"><h3>Home Page</h3></a>
         <li><a href="deals.php"><h3>Best Deals</h3></a></li>
               
       
               
     
       <li><a href="contactus.php"><h3>Contact us</h3></a></li>

        <li><a href="aboutus.php"><h3>About us</h3></a></li>
        <li><a href="Log in.php" target="_blank"><h3>Login</h3></a></li>
        <a href="LogOut.php" style='color:blue;'><h3>LogOut</h3></a>
        </div>
        </div>
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
        
      </div>
      </div>
      


      <div class="third">
        <div class="titell">
          <h2>ACCESORIES</h2>
        </div>
        <div class="First-row">
          <div class="Produkt">
          <img src="pica.jpg-removebg-preview.png" width="250px"  height="250px" alt="poker">
          <p> Shisha Poker    6.99$ </p>
        </div>
        <div class="Produkt">
          <img src="shisha-accesoires-removebg-preview.png" width="250px"  height="250px" alt="gaca">
          <p> Shisha Cole LIMITED EDITION    14.99$ </p>
        </div>
      

        </div>
      </div>
      </div>
      <hr>
      <br>
      
      
        
 
</body>



</html>