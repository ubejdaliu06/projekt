<?php
include_once 'accesoriesRepository.php'; 

$id = $_GET['id'];

$strep = new accesoriesRepository();
$strep->deleteaccesories($id);

header("location: Dashboard.php");
?>
