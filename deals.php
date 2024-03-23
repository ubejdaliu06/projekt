<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="deals.css">
</head>
<body>
    <div class="f1">
    <div class="main1">
    <div class="main" >
 
        <div class="dd">
        <h3>WARNING: This product contains nicotine. Nicotine is an addictive chemical.</h3>
        
    </div> 
    
        <div class="menu">
          
        
            <div class="headeri">
                <img src="Download1-removebg-preview.png" height="180px" >
                <div class="catalog"> 
                    <h2 style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">The Goat Vape</h2>
                </div>
            </div>
        </div>

        <div class="headerii">
        <div class="menu1">
             
          
              
               
        <li><a href="projekt.php"><h3>Home Page</h3></a></li>

                
                <li><a href="PajisjetNeShitje1.php"><h3>Shop</h3></a></li>

                <li><a href="aboutus.php"><h3>About us</h3></a></li>

               

                <li><a href="contactus.php"><h3>Contact us</h3></a></li>

                <li><a href="Log in.php"><h3>Login</h3></a></li>
                
                </div>
        </div>
    </div>
    </div>
    <div class="new">
            <div class="new1">
               <h2>Best Deals</h2>
            </div>
         <div class="yy">
          <div class="photo-container" id="photoContainer">
            <div class="photo-list" id="photoList">
               
            </div>
            
                
            </div>
        
            </div>
            <div class="yy1">
                <h2 style="font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">20% off </h2>
          
        </div>
    </div>
    </div>
    <div class="gra">
        
       <a href=""><img src="elf-bar-600-bubble-tea-e-zigarette-vape-stick-20-mg-alle-neuen-sorten-guenstig-online-kaufen-hookain-e-shisha-onlineshop.webp" alt=""height="200px"></a>
        <a href=""><img src="u6-removebg-preview.png" alt="" height="200px"></a>
       <a href=""><img src="u4-removebg-preview.png" alt="" height="200px"></a>
       <a href=""><img src="u3-removebg-preview.png" alt="" height="200px"></a>
    </div>
    <div class="g2">
        <h2> Gratis Ofert
                 1+1
        </h2>
    </div>
    <div class="gra">
        
       <a href=""><?php foreach ($shisha as $vape) { ?>
        
        <a href=""> <img src="<?php echo $vape['img']?>" height="200px">
            <p><?php echo $vapet['Emri']?></p></a> 
        
    
        <?php } ?></a>
    </div>
   
    <hr>
    <br>
    <script src="deals.js"></script>
</body>
</html>