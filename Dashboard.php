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
include "Contact.php";

$strep = new VapeRepository();
$vape = $strep->getAllVape();
$strepShisha = new ShishaRepository();
$shisha = $strepShisha->getAllShisha();
$contact = new Contact();
$data = $contact->getAllComments();

?>

  
  
  
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Goat Vape</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }

        h2 {
            text-align: center;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            margin-top: 0;
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
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f2f2f2;
        }

        .menu {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }

        .headeri {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .catalog h2 {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            margin: 0;
        }

        img {
            height: 180px;
        }
    </style>
</head>
<body>

<div class="menu">
    <div class="headeri">
        <a href="projekt.php">
            <img src="Download1-removebg-preview.png" alt="The Goat Vape Logo">
        </a>
        <div class="catalog">
            <h2>The Goat Vape</h2>
        </div>
    </div>
</div>

<h2 style="text-align: center;">Regjistri i Vapes</h2>

<table>
    <thead>
    <tr>
        <th>Emri</th>
        <th>Pershkrimi</th>
        <th>Cmimi</th>
        <th>Foto</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach($vape as $vapet) { ?>
        <tr>
            <td><?php echo $vapet['Emri'];?></td>
            <td><?php echo $vapet['Pershkrim'];?></td>
            <td><?php echo $vapet['Cmimi'];?></td>
            <td><?php echo $vapet['img'];?></td>
            <td><a href='edit.php?Id=<?php echo $vapet['Id']?>'>Edit</a></td>
            <td><a href='delete.php?Id=<?php echo $vapet['Id']?>'>Delete</a></td>
        </tr>
    <?php } ?>
    </tbody>
</table>

<a href="Register1.php">Register Vape</a>

<h2 style="text-align: center;">Regjistri i Shishave</h2>

<table>
    <thead>
    <tr>
        <th>Emri</th>
        <th>Cmimi</th>
        <th>Foto</th>
        <th>Pershkrimi</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach($shisha as $shishat) { ?>
        <tr>
            <td><?php echo $shishat['Emri'];?></td>
            <td><?php echo $shishat['cmimi'];?></td>
            <td><?php echo $shishat['img'];?></td>
            <td><?php echo $shishat['Pershkrim'];?></td>
            <td><a href='edit1.php?shisha_ID=<?php echo $shishat['shisha_ID']?>'>Edit</a></td>
            <td><a href='delete1.php?shisha_ID=<?php echo $shishat['shisha_ID']?>'>Delete</a></td>
        </tr>
    <?php } ?>
    </tbody>
</table>

<a href="Register12.php">Register Shisha</a>




<h2 style="text-align: center;">Regjistri i Paqartesive</h2>
<table>

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
                <?php foreach($data as $msg) { ?>
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
        <br><br><br>

</body>
</html>
