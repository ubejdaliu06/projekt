<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="ContactUs.css">
</head>
<body>
<div class="logo">
      <a href="projekt.php"> <img src="Download1-removebg-preview.png"> </a>
    </div>

<div class="forma">
        <form onsubmit="return validateform()" method="POST">
            <div class="contact">
                <h1>Contact Us
                </h1>
                </div>
            <p>Emri:<br>
            <input type="text" id="emri" name="emri"></p>
            <p>Mbiemri:<br>
            <input type="text" id="mbiemri" name="mbiemri"></p>
            <p>E-mail:<br>
            <input type="text" id="email" name="email"></p>
            <p>Numri Telefonit::<br>
            <input type="text" id="nrtelefonit" name="nrtelefonit"></p>
            <p>A keni ndonje pyetje?<br>
            <textarea id="comment" cols="40" rows="10" name="comment" style="border-color: #eeeeee; border:2px solid #eeeeee"></textarea></p>
            <p><input type="submit" id="submit-btn" value="Send" name='input'></p>
        </form>
    </div>
    
        <style>
            body{
    display: flex;
    justify-content: center;
    align-items: center;
    background: url(1616588204_35-p-fon-magiya-39.jpg) no-repeat;
    background-size: cover;
    
}
p{
    color:white;
}
h1{
    color:white;
}
input{
    width: 90%;
    height: 30px;
}
.forma {
    font-family: Arial, sans-serif;
    width: 420px;
    background: transparent;
    border: 2px solid rgba(255, 255, 255, .2);
    backdrop-filter: blur(50px);
    color:black;
    border-radius: 12px;
    padding: 30px 40px;

}


.contact {
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 20px;
    text-align: center;
}



textarea {
    width: calc(100% - 22px); 
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box; 
}


#submit-btn {

    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
    width: 95%;
    
    
}


#submit-btn:hover {
    background-color: #45a049;
}

        </style>
    <?php
                if(isset($_POST['input'])){
                      include_once 'Contact.php';

                      $obj= new Contact();
                      $res = $obj->contact_us($_POST);

                      if($res == true){
                        echo "<script>alert('Query successfully Submitted .Thank You')</script>";
                      }
                      else{
                        echo "<script>alert('Something Went wrong!!')</script>";
                      }
                }

            ?>

    <script>
        function validateform() {
            var email = document.getElementById('email').value;
            var nrtelefonit = document.getElementById('nrtelefonit').value;
            var phoneregex = /^(+383|0)?[1-9]\d{7,8}$/;

            var emailRegex = /^[^\s@]+@[^\s@]+.[^\s@]+$/;

            if (!emailRegex.test(email)) {
                alert('Please enter a valid email address');
                return false;
            }

            if (!phoneregex.test(nrtelefonit)) {
                alert('Please enter a valid phone number');
                return false;
            }

            return true;
        }
    </script>

</body>
</html>