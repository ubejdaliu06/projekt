
 <?php
session_start();

class databaseConn{
    
  private $host = "localhost";
  private $username = "root";
  private $db = "vape";

function startConnection(){
  try{
      // Cakton atributet e PDO për raportimin e gabimeve
      $conn = new PDO("mysql:host=$this->host;dbname=$this->db", $this->username);
       // Cakton atributet e PDO për raportimin e gabimeve
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      // Kontrollon nëse lidhja është suksesshme
      if(!$conn){
          //echo "Connection failed "; per testim
          return null;
      }else{
          //echo "Connection successful!"; per testim
          return $conn;
      }

  }catch(PDOException $e){
      echo "Connection failed ". $e->getMessage();
      return null;
  }
}
}
//Kontrollon nëse kërkesa është bërë përmes metodes POST.
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $Username = $_POST['name'];
                if($result){
//nese ka result dhe numri i reshtave te tij eshte me i madh 0;
                    if($result && mysqli_num_rows($result) > 0){
                        $user_data = mysqli_fetch_assoc($result);
                     // Nëse përdoruesi dhe fjalëkalimi janë të saktë, krijohet sesioni dhe përdoruesi ridrejtohet në faqen e projektit
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

    <a href="aboutus.php">About Us</a>
    <a href="projekt.php">Home Page</a>
    <a href="PajisjetNeShitje1.php">Selling Page</a>
    <a href="contactus.php">Contact us</a>
    <a href="deals.php">Best Deals</a>

   
  
  

   
</div>


  
    
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

<br>
    <!-- <label for="signup" name='login'>Log In </label></div></button> -->
   <button type="button" name ="logIN" onclick="validateForm()"> log in</button>
   
  
</div>
</div>
</div>
</form>
  <div class="Register">

    <a href="Register.php"><button class="button-wr"> Sign up</button>

   
  </div>

  


    
  <script src="">
    
function validateForm(){
  let UserName = document.getElementById('UserName');
  let password = document.getElementById('password');
  
  
  


let UserNameRegex = /^[a-z A-Z]$/;



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

