<?php 
session_start();
 include 'databaseConn.php';
 include_once 'dealsRepository.php'; 
 $p = new dealsRepository();
$deals = $p->getAlldeals();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Goat Vape - Best Deals</title>
    <!-- <link rel="stylesheet" href="deals.css"> -->
  
    
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        body, h1, h2, h3, h4, h5, h6, p, ul, li {
            margin: 0;
            padding: 0;
           
        }


        .main1 {
            background-color: #ffffff;
            padding: 20px;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

   

        .dd {
            text-align: center;
            padding: 10px 0;
        
    
            font-size: 14px;
            background-image:url(AdobeStock_277931111_Preview.jpeg);
          color: red;
        }

        .menu {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 20px;
            
        }

        .headeri img {
            height: 180px;
        }

        .catalog h2 {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            margin: 0;
            margin-left: 10px;
        }

        .headerii {
            background-color: #808080;
            padding: 10px;
            color: #ffffff;
        }

        .menu1 {
            list-style-type: none;
            display: flex;
            justify-content: space-around;
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
        .main1 {
            background-color: #ffffff;
            padding: 20px;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        /* Deal images */

        .yy{
  display: flex;
  justify-content: center;
}

.photo-container {
 
  width: 300px; 
  height: 300px; 
  overflow: hidden;
  position: relative;
}

.photo-list {
  display: flex;
  transition: transform 0.5s ease-in-out; 
}

.photo {
  width: 100%;
  height: 100%;
  object-fit: cover;
  border-radius: 8px;
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
        h3{
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
        <li><a href="projekt.php"><h3><img src="website-home-page-svgrepo-com.svg" alt=""height="30px"></h3></a></li>
            
            
            <li><a href="deals.php"><h3><img src="shopping-hot-blackfriday-svgrepo-com.svg" alt=""height="30px"></h3></a></li>
            <li><a href="aboutus.php"><h3><img src="about-filled-svgrepo-com.svg" alt=""height="30px"></h3></a></li>
            <li><a href="PajisjetNeShitje1.php"><h3><img src="download-remddddovebg-preview (1).png" alt=""height="35px"></h3></a></li>
            <li><a href="contactus.php"><h3><img src="contact-us-filled-svgrepo-com.svg" alt=""height="30px" target="_blank"></h3></a></li>
           
            </li>    <?php  if(isset($_SESSION['roli'])){
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
                
            
      
    <div class="g2">
        <h2>Gratis Offer 1+1</h2>
    </div>

    <div class="first" >
            <?php foreach ($deals as $ad) { ?>
        
           <a href=""> <img src="<?php echo $ad['img']?>" height="200px">
               <p><?php echo $ad['Emri']?></p>
               <p><?php echo $ad['cmimi']?></p>
            </a> 
           
       
           <?php } ?>

    </div>   
 

    </div>
</div>
<div class="f">
        <div class="ff">
            <h4>Follow us</h4>
            <div class="f6">
            <a href="https://www.facebook.com/"><img src="facebook.svg" alt="Facebook" height="50px"></a>
                <a href="https://twitter.com/i/flow/login"><img src="twitter-6.svg" alt="Twitter" height="50px"></a>
                <a href="https://www.instagram.com/"><img src="instagram-2016-5.svg" alt="" height="50px"></a>
                <a href="https://www.pinterest.com/login/"><img src="pinterest-4.svg" alt="" height="50px"></a>
            </div>
        </div>
    </div>

<hr>
<script src="deals.js"></script>
</body>
</html>
