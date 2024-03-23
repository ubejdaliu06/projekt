<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Goat Vape</title>
    <link rel="stylesheet" href="aboutus.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .main1 {
            background-color: #ffffff;
            padding: 20px;
        }

        .main {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .dd {
            text-align: center;
            padding: 10px 0;
            background-color: #ff9999;
            color: #ffffff;
            font-size: 14px;
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
            background-color: #333;
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

        .home {
            text-align: center;
            margin-top: 20px;
        }

        .u1 {
            margin: 20px;
            padding: 20px;
            background-color: #ffffff;
        }

        .about-section {
            text-align: justify;
            line-height: 1.5;
        }

        .our {
            display: flex;
            justify-content: space-around;
            align-items: center;
            margin-top: 20px;
            padding: 20px;
            background-color: #ffffff;
        }

        .s55 {
            text-align: center;
        }

        .f {
            background-color: #333;
            color: #ffffff;
            text-align: center;
            padding: 20px;
        }

        .ff {
            margin-top: 10px;
        }

        .f6 a {
            margin: 0 5px;
            color: #ffffff;
        }

        .fundi {
            text-align: center;
            padding: 20px;
            background-color: #333;
            color: #ffffff;
        }

        .end {
            text-align: center;
            padding: 20px;
            background-color: #333;
            color: #ffffff;
        }
    </style>
</head>
<body>

<div class="main1">
    <div class="main">
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
        </div>
    </div>
    <div class="home">
        <h4>About us</h4>
    </div>
    <h2 style="text-align: center;">History</h2>
    <div class="u1">
        <div class="about-section">
            <h4>Established in 2013, Element Vape is a progressive retail establishment in the electronic cigarette industry based out of California. Our personal philosophy is to give consumers more than what they pay for. With an uncompromising drive to exceed expectations, we are committed to help customers experience the best possible shopping experience. Furthermore, we invested in a strict, industry-leading age verification system to verify every single order for youth prevention in accordance with federal law.

            Trash The Ash...Get In The Element.
            ElementVape.com offers a wide array of the vape products and accessories, complemented with premium vape juice to satisfy your needs. With the industry growing and becoming more innovative, we have an unerring fascination for the newest technology and the latest products. Through continued partnership with major manufacturers, we are able to receive the best pricing available, creating an outlet of considerable savings for our customers with unbeatable prices and thousands of selection. The Element Vape team aims to push the boundaries of service to deliver customers a completely satisfying experience.

            Element Vape is committed to the vibrant vaping community. We are an active member of Vapor Tech Association (VTA) and donated to vape advocacy groups such as American Vaping Association (AVA).</h4>
        </div>
    </div>
    <div>
        <h2>Our Company</h2>
    </div>
    <div class="our">
        <div class="s55">
            <h4>5-STAR USER REVIEWS</h4>
            <h1>1K</h1>
        </div>
        <div class="s55">
            <h4>INSTAGRAM FOLLOWERS</h4>
            <h1>20K</h1>
        </div>
        <div class="s55">
            <h4>FACEBOOK FOLLOWERS</h4>
            <h1>100K</h1>
        </div>
        <div class="s55">
            <h4>VIMEO VIDEOS</h4> 
            <h1>10K</h1>
        </div>
    </div>
    <div class="f">
        <div class="ff">
            <h4 style="font-family: Arial, Helvetica, sans-serif;">Follow us</h4>
            <div class="f6">
                <a href="https://www.facebook.com/"><img src="facebook.png" alt="Facebook" height="20px"></a>
                <a href="https://twitter.com/i/flow/login"><img src="twitter.png" alt="Twitter" height="20"></a>
                <a href="https://www.pinterest.com/login/"><img src="pinterest.png" alt="" height="20px"></a>
                </div>
                </div>
            </div>
                <div class="fundi">
                    <h3>Copyright 2023 The Goat Vape Company. All rights reserved.  </h3>
                    <h3>Designed by Ubejd and Ilmi</h3>
                </div>
                <hr>
            </div>
            
            
            <div class="end" style="font-family: Verdana, Geneva, Tahoma, sans-serif;" style="margin: 5;">
                <h4>Not for Sale for Minors - Products sold on this site may contain nicotine which is a highly addictive substance. California Proposition 65 - WARNING: This product can expose you to chemicals including nicotine, which is known to the State of California to cause birth defects or other reproductive harm. For more information, go to Proposition 65 Warnings Website. Products sold on this site is intended for adult smokers. You must be of legal smoking age in your territory to purchase products. Please consult your physician before use. E-Juice on our site may contain Propylene Glycol and/or Vegetable Glycerin, Nicotine and Flavorings. Our products may be poisonous if orally ingested. FDA DISCLAIMER: The statements made regarding these products have not been evaluated by the Food and Drug Administration. The efficacy of these products has not been confirmed by FDA-approved research. These products are not intended to diagnose, treat, cure or prevent any disease. All information presented here is not meant as a substitute for or alternative to information from health care practitioners. For their protection, please keep out of reach of children and pets. Read our terms and conditions page before purchasing our products. Use All Products On This Site At Your Own Risk!</h4>
            </div>
        </div>
</body>
</html>