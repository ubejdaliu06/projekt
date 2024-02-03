<?php
  
include "../home page/databaseConn.php";
include_once "../home page/VapeRepository.php";

$p = new VapeRepository();
$vape = $p->getAllVape();
?>

<!DOCTYPE html>
<html>
<head>
<title>Home Page</title>
<link rel="stylesheet" href="PajisjetNeShitje.css">
</head>
<body>

 
    <div class="navbar">
        <a href="../about us/aboutus.php">About Us</a>
        <a href="../home page/projekt.php">Home Page</a>
        <a  
        id="right" href="../log in/Log in.php">Login</a>
        


    <div class="navbar">
        <a href="C:\Users\ilmia\Desktop\ubejd\Detyre\projekt\about us\aboutus.html">About Us</a>
        <a href="C:\Users\ilmia\Desktop\ubejd\Detyre\projekt\home page\projekt.html">Home Page</a>
        <a  
        id="right" href="C:\Users\ilmia\Desktop\ubejd\Detyre\projekt\log in\Log in.html">Login</a>
       
    </div>
    <div class="Banner">
      
        <h3>WARNING: The Items in our Shop contain nicotine
          Nicotine is an Addictive chemical.!
        </h3>
      </div>
        <div class="Main" id="sample">
        <div class="First-bracket">
            <div class="titell">
            <h2> SHISHA'S</h2>
          </div>
          <div class="first">
            <div class="Produkt">
            <img src="shisha 1.png" width="250px" height="250px" alt="shisha1">
            <p>Standard Shisha 59.99$</p>
          </div>
          <div class="Produkt"><img src="shisha 2.png" width="250px" height="250px" alt="shisha2">
            <p>Black shisha 79.99$</p>
          </div>
         <?php foreach ($vape as $shisha){?>
          <div class="Produkt">
            <img src="<?php echo $shisha['img']?> " width="250px" height="250px" alt="shisha 3">
            
          <p> <?php echo $shisha['pershkrim']?></p>
          <div class="Produkt"><img src="<?php echo $shisha['img']?> " width="250px" height="250px" alt="shisha 3">
            
          <p> <?php echo $shisha['Pershkrim']?></p>
          </div>
          <?php } ?>
         
           
          





        </div>
        
      </div>
    </div>

      <div class="SEcond" >
      <div class="titell">
      <h2>VAPE'S</h2>
    </div>
      <div class="first-row">
        
        <div class="Produkt">
          <img src="u1-removebg-preview.png" width="250px" height="250px" alt="Vape1">
          <p>Viho Vape 2% Nic    9.99$</p>
        </div>
        <div class="Produkt"><img src="E-shisha-STRAWBERRY-removebg-preview.png" width="250px" height="250px" alt="vape2">
          <p>XInfinity Vape 0% Nic    12.99$</p>
        </div>
        <div class="Produkt"><img src="E-shisha-KIWI-removebg-preview.png" width="250px" height="250px" alt="vape 3">
          <p> Sigelei Smart Vape    15.99$</p>
        </div>
        <div class="Produkt"><img src="E-shisha-HASH-removebg-preview.png" width="250px" height="250px" alt="vape 3">
          <p> Sigelei Smart Vape    15.99$</p>
        </div>
        <div class="Produkt"><img src="E-shisha-BANANA-removebg-preview.png" width="250px" height="250px" alt="vape 3">
          <p> Sigelei Smart Vape    15.99$</p>
        </div>
        <div class="Produkt"><img src="E-shisha-APPLE-PEACH-removebg-preview.png" width="250px" height="250px" alt="vape 3">
          <p> Sigelei Smart Vape    15.99$</p>
        </div>
        <div class="Produkt"><img src="u2-removebg-preview.png" width="250px" height="250px" alt="vape 3">
          <p> Sigelei Smart Vape    15.99$</p>
        </div>
        <div class="Produkt"><img src="u3-removebg-preview.png" width="250px" height="250px" alt="vape 3">
          <p> Sigelei Smart Vape    15.99$</p>
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
      
      
        
      <div class="Copyright">
        <h3 class="left">Copyright 2023 The Goat Vape Company. All rights reserved.  </h3>
        <h3 class="right">Designed by Ubejd and Ilmi</h3>
    </div>
    <hr>
        <div class="Fund">
        <h3 id="footer">Not for Sale for Minors - Products sold on this site may contain nicotine which is a highly addictive substance. California Proposition 65 - WARNING: This product can expose you to chemicals including nicotine, which is known to the State of California to cause birth defects or other reproductive harm. For more information, go to Proposition 65 Warnings Website. Products sold on this site is intended for adult smokers. You must be of legal smoking age in your territory to purchase products. Please consult your physician before use. E-Juice on our site may contain Propylene Glycol and/or Vegetable Glycerin, Nicotine and Flavorings. Our products may be poisonous if orally ingested. FDA DISCLAIMER: The statements made regarding these products have not been evaluated by the Food and Drug Administration. The efficacy of these products has not been confirmed by FDA-approved research. These products are not intended to diagnose, treat, cure or prevent any disease. All information presented here is not meant as a substitute for or alternative to information from health care practitioners. For their protection, please keep out of reach of children and pets. Read our terms and conditions page before purchasing our products. Use All Products On This Site At Your Own Risk!</h3>
        </div>
</body>



</html>