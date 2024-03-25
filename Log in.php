<?php
session_start();

if(isset($_SESSION['email'])){
  header("location:projekt.php");
  die;
}
include("db.php");

        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $email = $_POST['email'];
            $pass = $_POST['pass'];

            if(!empty($email) && !empty($pass) && !is_numeric($email)){
                $query= "Select * From form where email = '$email' limit 1";
                $result = mysqli_query($con, $query);

                if($result){

                    if($result && mysqli_num_rows($result) > 0){
                        $user_data = mysqli_fetch_assoc($result);

                        if($user_data['pass'] == $pass){
                            session_start();
                            $_SESSION['email'] = $user_data['email'];
                            $_SESSION['roli'] = $user_data['roli'];
                            header("location:projekt.php");
                            die;

                        }
                    }
                }
                echo "<script type='text/javascript'> alert('Wrong email or password')</script>";
            }
            else{
                echo "<script type='text/javascript'> alert('Wrong email or password')</script>";
            }

        }


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title id="title">the GoatVape</title> 
  <link rel="stylesheet" href="LogIN.css">

</head>
<body> 
  <div class="logo">
  
 <br>
 <br>
      <a href="projekt.php"> <img src="Download1-removebg-preview.png"> </a>
    </div>

  <div class="formular">
    <form onsubmit="validimi()" method="POST">
      <h1  style="color:white;">LogIn</h1>

        <label style="color:white;">E-mail:</label>
        <input type="text" placeholder="E-mail" id="email" name="email" class="input-box" required>
        <label style="color:white;">Password:</label>
        <input type="password" placeholder="Password" id="fjalekalimi" name="pass" class="input-box" required>
        

      <div class="remember-forgot">
        <label style="color:white;"><input type="checkbox" >Remember Me</label>
        <a href="#" style="color:white;">Forgot Password</a>
      </div>
      <button type="submit" class="btn">LogIn</button>
      <br><br>
      <a href="Register.php" target="_blank"><p id="register"style="display:flex; margin-left:120px; text-align:center; justify=content:center; align-items:center; color:white;">Create Account</p></a>
    </form>
  </div>

  <script>
      function validimi() {
      let emri = document.getElementById("emri").value;
      let email = document.getElementById("email").value;
      let fjalekalimi = document.getElementById("fjalekalimi").value;
      let confirmpassword = document.getElementById("confirmpassword").value;

      let emriRegex = /^[a-zA-Z\s]+$/;
      if (!emriRegex.test(emri)) {
        alert("Please enter a valid username!");
        return false;
      }

      let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (!emailRegex.test(email)) {
        alert("Please enter a valid email!");
        return false;
      }

      if(fjalekalimi.length<8){
        alert("Password should be more than 8 characters long");
        return false;
      }

      if (fjalekalimi !== confirmpassword) {
        alert("Passwords aren't matching!");
        return false;
      }
      alert("The account was created sucesfully!");
      return true;
    }
  </script>
</body>
</html>