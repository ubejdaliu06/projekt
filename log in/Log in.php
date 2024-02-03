<?php
session_start();

    include("../home page/db.php");

        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $Username = $_POST['name'];
            $pass = $_POST['password'];

            if(!empty($Username) && !empty($pass)){
                $query= "Select * From user where Username = '$Username' limit 1";
                $result = mysqli_query($con, $query);

                if($result){

                    if($result && mysqli_num_rows($result) > 0){
                        $user_data = mysqli_fetch_assoc($result);

                        if($user_data['Password'] == $pass){
                            session_start();
                            $_SESSION['Username'] = $user_data['
                            Username'];
                          $_SESSION['roli'] = $user_data['roli'];
                          header("location: projekt.php");
                              die;

                        }
                    }
                }
                echo "<script type='text/javascript'> alert('Wrong username or password')</script>";
            }
            else{
                echo "<script type='text/javascript'> alert('Wrong username or password')</script>";
            }

        }



?>




<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="ilmi">
  <meta name="Views" content="width=device-width, inital-scale=1">
  <title>The Goat Vape</title>
  <link rel="stylesheet" href="LogIN.css">
 



</head>
<body>
  <div class="navbar">

    <a href="../about us/aboutus.php">About Us</a>
    <a href="../home page/projekt.php">Home Page</a>
    <a href="../page of sell/PajisjetNeShitje1.php">Selling Page</a>

   
  
  

   
</div>

  <div class="Banner">
    <h3>WARNING: The Items in our Shop contain nicotine
      Nicotine is an Addictive chemical.!
    </h3>
  </div>

  <form onsubmit=" validateForm()" method="POST" >



  
    
    <div class="h2">
      
      <h1 class="LOGIN"> Log In </h1>
      
      <div class="task">
      <div class="UserName">
        <label for="name" style="margin: 5px;"><div class="UserName">UserName:</div></label>

      

        <input name="Username" itemid="UserName"  placeholder="Username" id="UserName" type="text" required>

       
       </input>
        
    </div>
    
    
    
     
    <div class="password">
      <label for="password"><div class="password"> Password: </div></label>
      <input name="password"  id="password" type="password" required>
      
    </input>
    </div>

  
  <div class="passwordError" id="passwordError"></div>

  <div class="signup">

  <!-- <a href="../home page/projekt.php"></label> <button type="button" name ="logIN" > <div class="button">-->
    <label for="signup" name='login'>Log In </label></div></button>
  <a href="../home page/projekt.php"></label> <button type="button" name ="logIN" onclick="validateForm()"> <div class="button"> <label for="signup" name='login'>Log In </label></div></button>

  </a>
</div>
</div>
</div>
</form>
  <div class="Register">

    <a href="../Regjistrimi/Register.php"><button class="button-wr"> Sign up</button>

   
  </div>

  
 <!--<div class="Copyright">
  <h3 id=" left">Copyright 2023 The Goat Vape Company. All rights reserved.  </h3>
  <h3 id="rights">Designed by Ubejd and Ilmi</h3>
</div>
<hr>


  <div class="Fund">
<h3>Not for Sale for Minors - Products sold on this site may contain nicotine which is a highly addictive substance. California Proposition 65 - WARNING: This product can expose you to chemicals including nicotine, which is known to the State of California to cause birth defects or other reproductive harm. For more information, go to Proposition 65 Warnings Website. Products sold on this site is intended for adult smokers. You must be of legal smoking age in your territory to purchase products. Please consult your physician before use. E-Juice on our site may contain Propylene Glycol and/or Vegetable Glycerin, Nicotine and Flavorings. Our products may be poisonous if orally ingested. FDA DISCLAIMER: The statements made regarding these products have not been evaluated by the Food and Drug Administration. The efficacy of these products has not been confirmed by FDA-approved research. These products are not intended to diagnose, treat, cure or prevent any disease. All information presented here is not meant as a substitute for or alternative to information from health care practitioners. For their protection, please keep out of reach of children and pets. Read our terms and conditions page before purchasing our products. Use All Products On This Site At Your Own Risk!</h3>
</div>-->

    
  <script>
    
function validateForm(){
  let UserName = document.getElementById('UserName');
  let password = document.getElementById('password');
  
  
  


let UserNameRegex = /^[a-z A-Z]$/;

let UserNameRegex = /^[a-z A-Z]+[0-9]$/;

let passwordRegex = /^[a-z A-Z]+[0-9]+$/;

if(!UserNameRegex.test(UserName)){
  alert('Type another Username include numbers!');
  return;
}

if(!passwordRegex.test(password)){
 alert =('Try another password including numbers');  
  return ;
}
if(password < 8){
  passError.innerText=('minimun length of a password is 8');
  return;  
}
alert('Your loged in with Success');
}
  </script>
  



</body>

</html>

