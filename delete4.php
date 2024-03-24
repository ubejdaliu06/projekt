<?php
include_once 'dealsRepository.php'; 

$id = $_GET['id'];

$strep = new dealsRepository();
$strep->deletedeals($id);

header("location: Dashboard.php");
?>
