<?php
include_once 'VapeRepository.php';
$id = $_GET['Id'];

$strep = new VapeRepository();
$strep->deleteVape($id);

header("location:Dashboard.php");
?>