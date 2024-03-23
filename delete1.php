<?php
include_once 'ShishaRepository.php'; 

$id = $_GET['shisha_ID'];

$strep = new ShishaRepository();
$strep->deleteShisha($id);

header("location: Dashboard.php");
?>
