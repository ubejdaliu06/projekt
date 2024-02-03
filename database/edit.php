<?php
include_once('VapeRepository.php'); 
$id = isset($_GET['Id']) ? $_GET['Id'] : null;

$strep = new VapeRepository();
$Vape = $strep->getVapeById($id);
?>


<!DOCTYPE html>
<html>
<body>
    <h3>Edit Vape</h3>
    <form action="<?php echo $_SERVER['PHP_SELF'] . '?Id=' . $id; ?>" method="POST">
     <!-- nese nuk duam t'i ndryshojme te gjitha te dhenat, e perdorim kete pjesen tek value qe te na shfaqen vlerat aktuale, ashtu qe atributet qe nuk duam t'i ndryshojme mbesin te njejta pa pasur nevoje t'i shkruajme prape-->  
     <label>Emri:</label>    
     <input type="text" name="emri"  value="<?php echo $Vape['Emri']?>"> <br> <br> <!-- Pjesa brenda [] eshte emri i sakte i atributit si ne Databaze-->
     <label>Pershkrimi:</label> 
     <input type="text" name="ngjyra"  value="<?php echo $Vape['Pershkrimi']?>"> <br> <br>
     <label>Cmimi:</label> 
     <input type="text" name="cmimi"  value="<?php echo $Vape['Cmimi']?>"> <br> <br>
     <label>Image:</label> 
     <input type="file" name="image"  value="<?php echo $Vape['image']?>"> <br> <br>
    
    </form>
</body>
<style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
}

h3 {
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:40px;
}

form {
    max-width: 400px;
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

<?php 

if(isset($_POST['editBtn'])){
    $Id = $Id; //merret nga paisja me siper
    $Emri = $_POST['Emri']; //merret nga formulari
    $Pershkrimi = $_POST['Pershkrimi'];
    $Cmimi = $_POST['Cmimi'];
    $image = $_POST['image'];
   

    $strep->editVape($Id,$Emri,$Pershkrimi,$Cmimi,$image);
    header("location:Dashboard.php");
    exit();
}

?>