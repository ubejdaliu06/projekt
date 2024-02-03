<?php
    session_start();

    include("../home page/db.php");
    include ("../home page/databaseConn.php");

    if($_SERVER['REQUEST_METHOD'] == "POST"){

        $Emri = $_POST['Emri'];

        $Mbiemri = $_POST['Mbiemri'];
        $Email_Adress = $_POST['Email_Adress'];
        $Username = $_POST['Username'];
        $Password = $_POST['Password'];
        $Birthdate = $_POST['Birthdate'];
        $Sex = $_POST['Sex'];
        

        if(!empty($name) && !empty($surname) &&!empty($Email_Adress) &&!empty($Username)&&!empty($Password)&&!empty($Birthdate)&&!empty($Sex)){
            $query = "insert into user (Emri, Mbiemri, Email_Adress,Username, Password, Birthdate, Sex) values('$Emri', ' $Mbiemri', '$Email_Adress','$Username','$Password','$Birthdate','$Sex')";

            if(mysqli_query($conn, $query)) {
         $Emri = $_POST['Emri'];
        $Surname = $_POST['Mbiemri'];
        $Email_Address = $_POST['Email_Adress'];
        $Username = $_POST['Username'];
        $pass = $_POST['Password'];
        $Birthdate = $_POST['Birthdate'];
        $Gjinia = $_POST['Sex'];

       

        if(!empty($email) && !empty($pass)){
            $query = "insert into user (Name, Surname, Email_Address,Username,Password,Birthdate,Sex,) values('$Emri', '$Surname','$Email_Address','$Username', '$pass','$Birthdate','$Gjinia')";

            mysqli_query($con, $query);

            echo "<script type='text/javascript'> alert('Successfully Register')</script>";
        }
        else{
            echo "<script type='text/javascript'> alert('Please Enter some Valid Information')</script>";
        }

    }
  }

  }
?>





<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <meta name="Views" content="width=device-width, inital-scale=1">
  <title>Sign Up</title>
  <link rel="stylesheet" href="Register.css">
 


<script src="Register.js"></script>


</head>
<body>
  <div class="navbar">

    <a href="../log in/Log in.php">Log In</a>



   
</div>
  <div class="Banner">
    <h3>WARNING: The Items in our Shop contain nicotine
      Nicotine is an Addictive chemical.!
    </h3>
  </div>

  <div class="Titull">
  <h1>Sign Up </h1>
  </div>





  <form onsubmit="validateForm()"   method="POST" >

  <div class="Register">
    <div class="Emri">
    <label for="name">Name</label>
    <input type="text" placeholder="Name" id="Emri" name="Emri" required>
    </div>
    <div class="Mbiemri">
    <label for="Mbiemri">Surname</label>
    <input type="text" placeholder="Surname" id="Mbiemri" name="Mbiemri">
    </div>
<div class="Email">
    <label for="Email">Email Address</label>
    <input type="email" placeholder="Email" id="Email" name="Email_Adress" required>
    </div>
    <div class="Email">
    <label for="Username">Username</label>
    <input type="text" placeholder="ex.Filan Fisteku" id="user" name="Username" required>
    </div>
    <div class="Password">
      <label for="Password">Password</label>
      <input type="password" placeholder="Min. 8 Characters" id="password" name="Password">
      </div>
      <div class="Confirm Password">
        <label for="Password">Confirm Password</label>
        <input type="password" placeholder="Min. 8 Characters" id="confirm-password" name="confirm-password">
        </div>
   
        <div class = "Emri">
          <label for="Birthdate">Birthdate</label>
          <input type="date" name="Birthdate">
        </div>
    <div class="Gjinia">
    
    <label for="Gjinia">Sex</label>
    
      
<div class="Perzgjidhje">
    <p>M</p>
    <input type="radio" id="Mashkull" name="Sex" value="Mashkull">
    <p>W</p>
    <input type="radio" id="Femer" name="Sex" value="Femer">
  </div>
  </div>
    

   

    <input type="submit"  class="Regjistrohu" value="Sign Up">

 
  </div>

</div>
  </form>
  

    
  
<script>

function validateForm(){
  let UserName = document.getElementById('User').value.trim();
  let Name = document.getElementById('Emri').value.trim();
  let Surname = document.getElementById('Mbiemri').value.trim();
  let Email = document.getElementById('Email').value.trim();
  let Password = document.getElementById('password').value.trim();
  let confirmPassword = document.getElementById('confirm-password').value.trim();
  let Mashkull = document.getElementById('Mashkull').checked;
  let Femer = document.getElementById('Femer').checked;

  

  let Vitilindjes = document.getElementById('Vitilindjes').value;

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

  alert('This UserName isnt valid (include Numbers)');

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

let dob = new Date(Vitilindjes);
let age = Math.floor((Date.now() - dob.getTime()) / (1000 * 60 * 60 * 24 * 365));
if (age < 18) {
    alert('You must be 18 years old!');
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






alert('Jeni Regjistruar Me Sukses!');
}





  }

</script>


</body>
</html>