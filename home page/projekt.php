<?php 
 include 'databaseConn.php';
 include_once 'VapeRepository.php'; 
 $p = new VapeRepository();
$vape = $p->getAllVape();
?>
<!DOCTYPE html>
<head>
<meta charset="utf-8">
<meta name="Views" content="width=device-width, inital-scale=1">
<title>The Goat Vape</title>
<link rel="stylesheet" href="projeckt.css">
</head>

  <body>
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
             
          
                <li><a href="/"><h3>Search</h3></a></li>
               
                <li><a href="../log in/Log in.php"><h3>Login</h3></a></li>
                
                <li><a href="../page of sell/PajisjetNeShitje1.php"><h3>Shop</h3></a></li>
                <li>
                  <?php 
                  
                 
                  if(isset($_SESSION['roli'])&&$_SESSION['roli']=="admin"){
                      echo"<a href='Dashboard.php'><h3>Dashboard </h3></a> ";
                  }
                 
                 require_once "databaseConn.php";
                 include_once "VapeRepository.php";
         
         $strep = new VapeRepository();
         $vape= $strep->getAllVape();
         
         ?>
           </li>
                
                </div>
        </div>
    </div>


    
                 
              
             
            
        
   
       
        
 
   

  
 
        
        <!-- <div class="t1">
            <h2>TRENDING</h2>
        </div>
                <div class="fotografit">
                  <div class="rubrika"> 
                <a href="">  
                <img src="u1-removebg-preview.png" alt="" class="img" height="200px" id="fotografit">
                 <h6>VIHO TURBO VAPES DISPOSABLE</h6>
            </a>
        </div>
     
          <div class="rubrika2">
                <a href="" >
                <img src="u2-removebg-preview.png" alt="" class="img" height="200px">
               
                    <h6>DUMMY VAPES XFINITY 6900 DISPOSABLE</h6>
                </a> 
    
            </div>
            <div class="rubrika3">
            <a href="">
                <img src="u3-removebg-preview.png" alt="" class="img" height="200px">
                <h6>SIGELEI SMART AC10000 DISPOSABLE</h6>
            </a> 
            </div>
            
            <div class="rubrika4">
                <a href="">
                <img src="u4-removebg-preview.png" alt="" class="img" height="200px">
                <h6> GEEK BAR PULSE – DISPOSABLE VAPE</h6>
            </a> 
        </div>
                  
          
                <div class="rubrika5">
                    <a href=""> 
                   
                    <img src="u5-removebg-preview.png" alt="" class="img" height="200px">
                    <h6>LOST VAPE ORION BAR 7500 DISPOSABLE</h6>
                </a> 
                </div>
            </a> 
            
                <div class="rubrika6">
                    <a href=""> 
                   
                        <img src="u6-removebg-preview.png" alt="" class="img" height="200px">
                    <h6>POD POCKET 7500 DISPOSABLE</h6>
                </a>
                </div> 
               
            
           </div>  -->
     
       
         <!-- <div class="para">
            <a href="">
                <img src="geek_vape_-_t200_aegis_touch_-_kits_-_all_colors-removebg-preview.png" alt="" height="200px">
                <h6>Geek Vape Disposable</h6>
            </a>
         </div>
         <div class="para1">
            <a href="">
                <img src="snowwolf_easy_smart_ea9000_disposable_-_default-removebg-preview.png" alt="" height="200px">
                <h6>Snowwolf Easy Smart Disposable</h6>
            </a>
         </div>
         <div class="para2">
            <a href="">
                <img src="oxbar_magic_maze_pro_10000_disposable_-_pod_juice_default-removebg-preview.png" alt="" height="200px">
                <h6>Oxbar Magic Pro Disposable</h6>
            </a>
         </div>
         <div class="para3">
            <a href="">
                <img src="spaceman_10k_pro_disposable_-_default-removebg-preview.png" alt="" height="200px">
                <h6>Spaceman Pro Disposable</h6>
            </a>
         </div>
         <div class="para4">
            <a href="">
                <img src="hamilton_devices_butterfly_510_vaporizer_battery_-_default_1-removebg-preview.png" alt="" height="200px">
                <h6>Hamilton Butterfly Disposable</h6>
            </a>
         </div>
         <div class="para5">
            <a href="">
                <img src="ijoy_bar_sd10000_disposable_-_default-removebg-preview.png" alt="" height="200px">
                <h6>Ijoy Bar Disposable</h6>
            </a>
         </div>
        </div>
          -->
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
            
           
        <div class="f">
          
            <div class="ff">
               
                
                 
                <h4 style="font-family: Arial, Helvetica, sans-serif;" >Follow us</h4>
                <div class="f6">
               
                    <a href="https://www.facebook.com/"><img src="facebook.png" alt="https://facebook>" height="40px"></a>
                
                    <a href="https://twitter.com/i/flow/login"><img src="twitter.png" alt="twitter" height="40px"></a>
               
                    <a href="https://www.instagram.com/"><img src="instagram.png" alt="" height="40px"></a>
              
                    <a href="https://www.pinterest.com/login/"><img src="pinterest.png" alt="" height="40px"></a>
            </div>
            </div>
    
        
       
           <!-- <div class="info" style="font-family: Arial, Helvetica, sans-serif;"> -->
            
            <!-- <div class="footercenter">
                <h4>Info</h4>
                <h4>Contact</h4>
                <h4>Reviews</h4>
                <h4>Our Company</h4>
             
            </div> -->
            </div>
            <!-- <div class="footerright">
                <h4>Terms of use Privacy Policy</h4>
            </div> -->
        </div>


        <div class="about-section">
            <a href="projekt\about us.html">
            <h2>About us</h2>
        </a>
        <div class="footercenter">
            <a href="">
            <h2>Info</h2>
            </a>
            <a href="">
            <h2>Contact</h2>
            </a>
            <a href="">
            <h2>Reviews</h2>
            </a>
            <a href="">
            <h2>Our Company</h2>
            </a>
            
         
        </div>
           
                <!-- <h4>Welcome to The Goat Vapes</h4>
                <h5>
                    At The Goat Vapes, we are enthusiasts dedicated to delivering the best vaping experience to our community.
                    Our mission is to provide high-quality vape products that cater to both beginners and seasoned vapers alike.
              
                    Founded in 2023, we have been on a journey to explore the world of vaping and share our passion with you.
                    Our team is comprised of vaping experts who are committed to offering expert advice, the latest products, and a friendly community.
             
                    Explore our range of premium e-liquids, cutting-edge devices, and accessories. Whether you're new to vaping or a cloud-chasing pro,
                    The Goat Vapes is here to elevate your vaping experience.
               
                    Thank you for choosing The Goat Vapes. Join us on this flavorful journey!
                </h5> -->
            </div>
   
       
        <div class="fundi">
            <h3>Copyright 2023 The Goat Vape Company. All rights reserved.  </h3>
            <h3>Designed by Ubejd and Ilmi</h3>
        </div>
        <hr>
    
    
    <div class="end">
        <h3>Not for Sale for Minors - Products sold on this site may contain nicotine which is a highly addictive substance. California Proposition 65 - WARNING: This product can expose you to chemicals including nicotine, which is known to the State of California to cause birth defects or other reproductive harm. For more information, go to Proposition 65 Warnings Website. Products sold on this site is intended for adult smokers. You must be of legal smoking age in your territory to purchase products. Please consult your physician before use. E-Juice on our site may contain Propylene Glycol and/or Vegetable Glycerin, Nicotine and Flavorings. Our products may be poisonous if orally ingested. FDA DISCLAIMER: The statements made regarding these products have not been evaluated by the Food and Drug Administration. The efficacy of these products has not been confirmed by FDA-approved research. These products are not intended to diagnose, treat, cure or prevent any disease. All information presented here is not meant as a substitute for or alternative to information from health care practitioners. For their protection, please keep out of reach of children and pets. Read our terms and conditions page before purchasing our products. Use All Products On This Site At Your Own Risk!</h3>
    </div>
</div>

   
    <script src="projekt.js"></script>

</body>


</html>


