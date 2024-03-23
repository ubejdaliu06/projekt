<?php 
session_start();
 include 'databaseConn.php';
 include_once 'VapeRepository.php'; 
 $p = new VapeRepository();
$vape = $p->getAllVape();
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Goat Vape</title>
    <link rel="stylesheet" href="projeckt.css">
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

    
     

        /* Product container */
        .new {
            margin-top: 40px;
        }

        .new1 h2 {
            text-align: center;
            font-size: 36px;
            margin-bottom: 20px;
        }

        /* Trending section */
        .f1 {
            margin-top: 40px;
        }

        .t1 h2 {
            text-align: center;
            font-size: 36px;
            margin-bottom: 20px;
        }

        .fotografit {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }

        .rubrika {
            text-align: center;
            margin: 10px;
        }

        .rubrika img {
            height: 200px;
            margin-bottom: 10px;
        }

        /* Footer */
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
                }
            }
            ?></li>
            <li><a href="Log in.php"><h3>Login</h3></a></li>
        </ul>
    </div>

    <div class="new">
        <div class="new1">
           <h2>NEW ARRIVALS</h2>
        </div>
        <div class="yy">
            <div class="photo-container" id="photoContainer">
                <div class="photo-list" id="photoList">
                </div>
            </div>
        </div>
    </div>

    <div class="f1">
        <div class="t1">
            <h2>TRENDING</h2>
        </div>
        <div class="fotografit">
        <div class="rubrika"> 
                <a href="">  
                <img src="u1-removebg-preview.png" alt="" class="img" height="200px" id="fotografit">
                 <h6>VIHO TURBO VAPES DISPOSABLE</h6>
            </a>
        </div>
     
          <div class="rubrika">
                <a href="" >
                <img src="u2-removebg-preview.png" alt="" class="img" height="200px">
               
                    <h6>DUMMY VAPES XFINITY 6900 DISPOSABLE</h6>
                </a> 
    
            </div>
            <div class="rubrika">
            <a href="">
                <img src="u3-removebg-preview.png" alt="" class="img" height="200px">
                <h6>SIGELEI SMART AC10000 DISPOSABLE</h6>
            </a> 
            </div>
            
            <div class="rubrika">
                <a href="">
                <img src="u4-removebg-preview.png" alt="" class="img" height="200px">
                <h6> GEEK BAR PULSE – DISPOSABLE VAPE</h6>
            </a> 
        </div>
                  
          
                <div class="rubrika">
                    <a href=""> 
                   
                    <img src="u5-removebg-preview.png" alt="" class="img" height="200px">
                    <h6>LOST VAPE ORION BAR 7500 DISPOSABLE</h6>
                </a> 
                </div>
            </a> 
            
                <div class="rubrika">
                    <a href=""> 
                   
                        <img src="u6-removebg-preview.png" alt="" class="img" height="200px">
                    <h6>POD POCKET 7500 DISPOSABLE</h6>
                </a>
                </div> 
              
                <div class="rubrika">
            <?php foreach ($vape as $vapet) { ?>
        
           <a href=""> <img src="<?php echo $vapet['img']?>" height="200px">
               <p><?php echo $vapet['Emri']?></p></a> 
           
       
           <?php } ?>

    </div>   
            
            </div>
           </div> 
          
           
           

    


    
    
        <div class="f3">
           
            <div class="title">
                <strong><h2>Newsletter</h2></strong>
            </div>
            
          
            
            <div class="label" for="newsletter">
                <span><h3>Sign Up for Our Newsletter:</h3></span>

            </div>

            <div class="control">
                <div class="ac1">

            <input name="email" type="email" id="newsletter" placeholder="Enter your email address" >
       
            <button class="ac1" title="Subscribe" type="submit">
                <span>Subscribe</span>
            </button>
            </div>
            </div>
            

        </div>
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

    <div class="end">
        <h3>Not for Sale for Minors - Products sold on this site may contain nicotine which is a highly addictive substance. California Proposition 65 - WARNING: This product can expose you to chemicals including nicotine, which is known to the State of California to cause birth defects or other reproductive harm. For more information, go to Proposition 65 Warnings Website. Products sold on this site is intended for adult smokers. You must be of legal smoking age in your territory to purchase products. Please consult your physician before use. E-Juice on our site may contain Propylene Glycol and/or Vegetable Glycerin, Nicotine and Flavorings. Our products may be poisonous if orally ingested. FDA DISCLAIMER: The statements made regarding these products have not been evaluated by the Food and Drug Administration. The efficacy of these products has not been confirmed by FDA-approved research. These products are not intended to diagnose, treat, cure or prevent any disease. All information presented here is not meant as a substitute for or alternative to information from health care practitioners. For their protection, please keep out of reach of children and pets. Read our terms and conditions page before purchasing our products. Use All Products On This Site At Your Own Risk!</h3>
    </div>
</div>

   
    <script src="projekt.js"></script>

</body>


</html>

