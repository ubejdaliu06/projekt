<?php
include_once 'Vape.php';
include_once 'VapeRepository.php';

if (isset($_POST['submitbtn'])) {
    $Emri = $_POST['emri']; 
    $Pershkrimi = $_POST['pershkrimi'];
    $cmimi = $_POST['cmimi'];
    


    $vape = new Vape($emri, $Pershkrimi, $cmimi);

    $VapeRepository = new Vape();
    $VapeRepository->insertVape($vape);
    header("location: Dashboard.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <h2>Register</h2>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
        <label>Emri:</label>
        <input type="text" name="emri" ><br>
        <label>Pershkrimi:</label>
        <input type="text" name="pershkrimi" ><br>
        <label>Cmimi:</label>
        <input type="text" name="cmimi" ><br>
        
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