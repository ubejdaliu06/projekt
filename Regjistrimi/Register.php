<?php
    session_start();

    include("../home page/db.php");

    if($_SERVER['REQUEST_METHOD'] == "POST"){

        $Emri = $_POST['name'];
        $Surname = $_POST['Mbiemri'];
        $Email_Address = $_POST['Email'];
        $Username = $_POST['User'];
        $pass = $_POST['Password'];
        $Birthdate = $_POST['Vitilindjes'];
        $Gjinia = $_POST['Gjinia'];

       

        if(!empty($email) && !empty($pass)){
            $query = "insert into form (Name, Surname, Email_Address,Username,Password,Birthdate,Sex,) values('$Emri', '$Surname','$Email_Address','$Username', '$pass','$Birthdate','$Gjinia')";

            mysqli_query($con, $query);
            echo "<script type='text/javascript'> alert('Successfully Register')</script>";
        }
        else{
            echo "<script type='text/javascript'> alert('Please Enter some Valid Information')</script>";
        }

    }
?>


<!DOCTYPE html>
<head>

  <meta charset="ilmi">
  <meta name="Views" content="width=device-width, inital-scale=1">
  <title>Sign Up</title>
  <link rel="stylesheet" href="Register.css">
 



</head>
<body>
  <div class="navbar">
    <a href="C:\Users\ilmia\Desktop\ubejd\Detyre\projekt\log in\Log in.html">Log In</a>
   
</div>
  <div class="Banner">
    <h3>WARNING: The Items in our Shop contain nicotine
      Nicotine is an Addictive chemical.!
    </h3>
  </div>

  <div class="Titull">
  <h1>Sign Up </h1>
  </div>

  <div class="pershkrim">
  <h3>Create your account by filling out the information below.</h3>
</div>

  <form onsubmit="validateForm()" method="POST">
  <div class="Register">
    <div class="Emri">
    <label for="name">Name</label>
    <input type="text" placeholder="ex. John" id="Emri" name="name" required>
    </div>
    <div class="Mbiemri">
    <label for="Mbiemri">Surname</label>
    <input type="text" placeholder="ex. Smith" id="Mbiemri" name="Mbiemri">
    </div>
<div class="Email">
    <label for="Email">Email Address</label>
    <input type="email" placeholder="abc123@....com" id="Email" name="Email" required>
    </div>
    <div class="User">
      <label for="User">Username</label>
      <input type="text" placeholder="ex.User12" id="User" name="User" required>
      </div>
    <div class="Password">
      <label for="Password">Password</label>
      <input type="password" placeholder="Min 8 Characters" id="password" name="Password">
      </div>
      <div class="Confirm Password">
        <label for="Password">Confirm Password</label>
        <input type="password" placeholder="" id="confirm-password" name="confirm-password">
        </div>
    <div class="Vitilindjes">
    <label for="Vitilindjes">Birthdate</label>
    <input type="date" id="Vitilindjes" name="Vitilindjes">
    </div>
    <div class="Gjinia">
    
    <label for="Gjinia">Sex</label>
    
      
<div class="Perzgjidhje">
    <p>M</p>
    <input type="radio" id="Mashkull" name="Gjinia" value="Mashkull">
    <p>W</p>
    <input type="radio" id="Femer" name="Gjinia" value="Femer">
  </div>
  </div>
    
    <input type="submit" onclick="validateForm()" class="Regjistrohu" value="Sign Up">
 
  </div>

</div>
  </form>
  <div class="Copyright">
    <h3>Copyright 2023 The Goat Vape Company. All rights reserved.  </h3>
    <h3>Designed by Ubejd and Ilmi</h3>
</div>
<hr>


<div class="Fund">
<h3>Not for Sale for Minors - Products sold on this site may contain nicotine which is a highly addictive substance. California Proposition 65 - WARNING: This product can expose you to chemicals including nicotine, which is known to the State of California to cause birth defects or other reproductive harm. For more information, go to Proposition 65 Warnings Website. Products sold on this site is intended for adult smokers. You must be of legal smoking age in your territory to purchase products. Please consult your physician before use. E-Juice on our site may contain Propylene Glycol and/or Vegetable Glycerin, Nicotine and Flavorings. Our products may be poisonous if orally ingested. FDA DISCLAIMER: The statements made regarding these products have not been evaluated by the Food and Drug Administration. The efficacy of these products has not been confirmed by FDA-approved research. These products are not intended to diagnose, treat, cure or prevent any disease. All information presented here is not meant as a substitute for or alternative to information from health care practitioners. For their protection, please keep out of reach of children and pets. Read our terms and conditions page before purchasing our products. Use All Products On This Site At Your Own Risk!</h3>
</div>

    
  
<script>
  
function validateForm(){
  let UserName = document.getElementById('User');
  let Name = document.getElementById('Emri');
  let Surname = document.getElementById('Mbiemri');
  let Email = document.getElementById('Email');
  let Password = document.getElementById('password');
  let confirmPassword = document.getElementById('confirm-password');
  let Mashkull = document.getElementById('Mashkull');
  let Femer = document.getElementById('Femer');

  

  let Vitilindjes = document.getElementById('Vitilindjes');
 

let UserNameRegex = /^[a-z A-Z]+[0-9]+$/;
let NameRegex = /^[a-z A-z]+$/;
let SurNameRegex = /^[a-z A-z]+$/;
let passwordRegex = /^[a-z A-Z]+[0-9]+$/;
let EmailRegex =  /^[a-zA-Z.-_]+@+[a-z]+\.+[a-z]+$/;
let MashkullRegex = /^[Mashkull]+$/;
let FemerRegex = /^[Femer]+$/;


if( Emri.value.trim() = '' || !NameRegex.test(Name)){
  alert('This Name isnt valid!');
  return;
}
if(!UserNameRegex.test(UserName)){
  alert('This UserName isnt valid (inlcude Numbers)');
  return;
}

if( Mbiemri.value.trim() = ''||!SurNameRegex.test(Surname)){
  alert('This SurName isnt valid!');
  return;
}
if(!passwordRegex.test(Password)){
  alert('This password isnt valid min. 8 characters!');
  return;
}
if(!EmailRegex.test(Email)){
  alert('This Email isnt valid!');
  return;
}


if(Password != confirmPassword){
  alert('The Passwords arent matching!');
  return;
}
if(MashkullRegex != Mashkull){
  if(FemerRegex != Femer){
    alert("You must choose a gender!");
  }
  return;
}
const today = new Date();
if(Vitilindjes != null){
  alert('Choose your Birthdate!');
}else{
const AGE = Vitilindjes - today;
}

if(AGE < 18){
  alert('You must be 18 years old!');
  return;
}




alert('Jeni Loguar Me Sukses!');
}
</script>


</body>