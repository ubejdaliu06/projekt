<?php
session_start();
include_once 'deals.php';
include_once 'TabletetRepository.php';

$addedBy = isset($_SESSION['email']) ? "Added By: " . $_SESSION['email'] : "Added By: Unknown";

if (isset($_POST['submitbtn'])) {
   
    $emri = $_POST['emri']; //meret nga name vendosur ne input text
    $ngjyra = $_POST['ngjyra'];
    $cmimi = $_POST['cmimi'];
    $memoria = $_POST['memoria'];
    $img = $_POST['img'];
    $pershkrimi = $_POST['pershkrimi'];
    $edit = $_POST['edit'];

    $tablet = new Tabletet($emri, $ngjyra, $cmimi,$memoria,$img,$pershkrimi, $edit);

    $tabletetRepository = new TabletetRepository();
    $tabletetRepository->insertTablet($tablet);
    header("location:Dashboard.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <h2>Register Tablet</h2>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">  
        <label>Emri:</label>    
        <input type="text" name="emri" ><br>
        <label>Ngjyra:</label>  
        <input type="text" name="ngjyra" ><br>
        <label>Cmimi:</label>  
        <input type="text" name="cmimi" ><br>
        <label>Memoria:</label>  
        <input type="text" name="memoria" ><br>
        <label>Foto e produktit:</label>  
        <input type="file" name="img" ><br>
        <label>Pershkrimi:</label>  
        <input type="text" name="pershkrimi" ><br>
        <input type="hidden" name="edit" value="<?php echo htmlspecialchars($addedBy); ?>"><br>
        <input type="submit" name="submitbtn" value="Submit">
        </form>
    </body>

<style>
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
}
h2{
    display: flex;
    justify-content: center;
    align-items:center;
    font-size:40px;
}
label{
    font-size:15px;
}
form {
    max-width: 300px;
    margin: 20px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

input {
    width: 100%;
    margin-bottom: 10px;
    padding: 8px;
    box-sizing: border-box;
}

input[type="submit"] {
    background-color: #4caf50;
    color: #fff;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #45a049;
}


</style>
    </html>