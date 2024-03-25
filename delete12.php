<?php
include_once 'elRepository.php'; 

$id = $_GET['id'];

$strep = new elRepository();
$strep->deleteel($id);

header("location: Dashboard.php");
?>
