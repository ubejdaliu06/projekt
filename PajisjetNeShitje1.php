<?php
  
  include "../home page/databaseConn.php";
  include_once "../home page/VapeRepository.php";
  
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
             
          
        <li><a href="/"><h3>Search</h3></a></li>
               
       <li><a href="../log in/Log in.php"><h3>Login</h3></a></li>
                
       <li><a href="../about us/aboutus.php"><h3>About us</h3></a></li>
       
       <li><a href="../best deals/deals.php"><h3>Best deals</h3></a></li>
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
      

      <div class="SEcond" >
      <div class="titell">
      <h2>VAPE'S</h2>
      </div>
      <div class="first-row">
        
        <div class="Produkt">
          <img src="u1-removebg-preview.png" width="150px" height="150px" alt="Vape1">
          <p>Viho Vape 2% Nic   
             9.99$</p>
        </div>
        <div class="Produkt"><img src="E-shisha-STRAWBERRY-removebg-preview.png" width="150px" height="150px" alt="vape2">
          <p>XInfinity Vape 0% Nic   
             12.99$</p>
        </div>
        <div class="Produkt"><img src="E-shisha-KIWI-removebg-preview.png" width="150px" height="150px" alt="vape 3">
          <p> Sigelei Smart Vape   
             15.99$</p>
        </div>
        <div class="Produkt"><img src="E-shisha-HASH-removebg-preview.png" width="150px" height="150px" alt="vape 3">
          <p> Sigelei Smart Vape    15.99$</p>
        </div>
        <div class="Produkt"><img src="E-shisha-BANANA-removebg-preview.png" width="150px" height="150px" alt="vape 3">
          <p> Sigelei Smart Vape   
             15.99$</p>
        </div>
        <div class="Produkt"><img src="E-shisha-APPLE-PEACH-removebg-preview.png" width="150px" height="150px" alt="vape 3">
          <p> Sigelei Smart Vape  
              15.99$</p>
        </div>
        <div class="Produkt"><img src="u2-removebg-preview.png" width="150px" height="150px" alt="vape 3">
          <p> Sigelei Smart Vape  
              15.99$</p>
        </div>
        <div class="Produkt"><img src="u3-removebg-preview.png" width="150px" height="150px" alt="vape 3">
          <p> Sigelei Smart Vape  
              15.99$</p>
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
        <div class="Produkt">
          <img src="mouth_gard-removebg-preview.png" width="250px"  height="250px" alt="Mouthgard">
          <p> Mouth Gardd    6.99$ </p>
        </div>

        </div>
      </div>
      </div>
      <hr>
      <br>
      
      
        
 
</body>



</html>