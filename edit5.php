<?php
session_start();
include 'dealsRepository.php'; 


$id = isset($_GET['id']) ? $_GET['id'] : null;

if ($id === null) {
  
    header("Location: some_error_page.php");
   
}

$editedBy = isset($_SESSION['email']) ? "Edited By: " . $_SESSION['email'] : "Edited By: Unknown";
$strep = new dealsRepository();
$deals = $strep->getdealsById($id);
?>

<!DOCTYPE html>
<html>
<body>
    <h3>Edit deals</h3>
    <form action="<?php echo $_SERVER['PHP_SELF'] . '?id=' . $id; ?>" method="POST">
     
     <label>Emri:</label>    
     <input type="text" name="Emri" value="<?php echo $deals['Emri']?>"> <br> <br> 
    
     <label>Cmimi:</label> 
     <input type="text" name="cmimi" value="<?php echo $deals['cmimi']?>"> <br> <br>
  
     <label>Foto e produktit:</label>
     <input type="file" name="img" value="<?php echo $deals['img']?>"> <br> <br>
     <label>Pershkrimi:</label>
     <input type="text" name="Pershkrim" value="<?php echo $deals['Pershkrim']?>"> <br> <br>
     <input type="hidden" name="edit" value="<?php echo htmlspecialchars($editedBy); ?>"> <br> <br>
     <input type="submit" name="editBtn" value="save"> <br> <br>
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

/* input[type="submit"] {
    background-color: #4caf50;
    color: #fff;
    cursor: pointer;
} */

input[type="submit"]:hover {
    background-color: #45a049;
}

</style>
</html>

<?php 

if(isset($_POST['editBtn'])){
    $id = $id; 
    $Emri = $_POST['Emri']; 
    $cmimi = $_POST['cmimi'];
    $img = $_POST['img'];
    $Pershkrim = $_POST['Pershkrim'];

    $strep->editdeals($id, $Emri, $Pershkrim, $cmimi, $img);
    header("location: Dashboard.php");
    exit();
}

?>

