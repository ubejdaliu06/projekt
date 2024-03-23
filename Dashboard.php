<?php 
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: Log in.php");
    exit;
}
if ( $_SESSION['roli'] !== 'admin') {
    header("Location: Log in.php");
  exit;
}
include "databaseConn.php";
include_once "VapeRepository.php";
include_once "ShishaRepository.php";
include "function.php"; 

$strep = new VapeRepository();
$vape = $strep->getAllVape();
$strepShisha = new ShishaRepository();
$shisha = $strepShisha->getAllShisha();

?>

<!DOCTYPE html>
<html>
<div class="menu"style="display:flex;  justify-content: center; ">
          
        
          <div class="headeri" >
            <a href="projekt.php" > <img src="Download1-removebg-preview.png" height="180px" >
            </a>
              <div class="catalog"> 
                  <h2 style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">The Goat Vape</h2>
              </div>
          </div>
      </div>

<body>   
   
      <tbody>
<tr> </tr>

   
    <table>
    <table>
        
            <tr>
                <th>Emri</th>
                <th>Pershkrimi</th>
                <th>Cmimi</th>
                <th>image</th>

            </tr>
     
        <body>
            <?php foreach($vape as $vapet) {  ?>

            <tr>
                <td><?php echo $vapet['Emri'];?></td>
                <td><?php echo $vapet['Pershkrim'];?></td>
                <td><?php echo $vapet['Cmimi'];?></td>
                <td><?php echo $vapet['img'];?></td>

                <td><a href='edit.php?Id=<?php echo $vapet['Id']?>'>Edit</a></td>

                <td><a href='delete.php?Id=<?php echo $vapet['Id']?>'>Delete</a></td>
            </tr>
           <p> <?php } ?>
            <a href="Register1.php" style="margin-top:40px; margin-left:40px;color:black;">Register</a></p>

            <br><br><br>                     
<table>
     <thead>
       <tr> 
          <th>Emri</th>
       
          <th>Cmimi</th>
        
          <th>Foto</th>
          <th>Pershkrimi</th>
        ^`
       </tr>
      </thead>
        <tbody>
        <h2 style="text-align: center;">Regjistri i Shishave</h2>
                <?php foreach($shisha as $shishat) { ?> 
                    <tr>
                        <td><?php echo $shishat['Emri'];?></td>
                      
                        <td><?php echo $shishat['cmimi'];?></td>
                   
                        <td><?php echo $shishat['img'];?></td>
                        <td><?php echo $shishat['Pershkrim'];?></td>
                       
                        <td><a href='edit1.php?shisha_ID=<?php echo $shishat['shisha_ID']?>'>Edit</a></td> 
                        <td><a href='delete1.php?shisha_ID=<?php echo $shishat['shisha_ID']?>'>Delete</a></td>
                    </tr>
                <?php }?> 
                <a href="Register12.php" style="margin-top:40px; margin-left:40px;color:black;">Register</a>
<h2 style="text-align: center;">Regjistri i Vapes</h2>

<table>
            <thead>
            <tr>
            <th>Emri</th>
                <th>Mbiemri</th>
                <th>Email</th>
                <th>NrTelefonit</th>
                <th>Comment</th>

            </tr>
            </thead>
            <tbody>
                <?php foreach($comment as $msg) { ?>
                    <tr>
                    <td><?php echo $msg['emri'];?></td>
                        <td><?php echo $msg['mbiemri'];?></td>
                        <td><?php echo $msg['email'];?></td>
                        <td><?php echo $msg['nrtelefonit'];?></td>
                        <td><?php echo $msg['comment'];?></td>


                    </tr>
                <?php }?> 
            </tbody>
        </table>
        <style>
 body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 20px;
}

h2 {
    text-align: center;
}

a {
    display: inline-block;
    margin-top: 20px;
    margin-left: 40px;
    padding: 10px 20px;
    background-color: #4CAF50;
    color: white;
    text-decoration: none;
    border-radius: 5px;
}

a:hover {
    background-color: #45a049;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

th, td {
    border: 1px solid #ddd;
    padding: 8px;
}

th {
    background-color: #f2f2f2;
    text-align: left;
}

tr:nth-child(even) {
    background-color: #f9f9f9;
}

tr:hover {
    background-color: #f2f2f2;
}



        </style>

    </table>
</body>

</html>
