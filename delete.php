<?php
include_once 'VapeRepository.php';
$id = $_GET['Emri'];

$strep = new VapeRepository();
$strep->deleteVape($Emri);

header("location:Dashboard.php");
?>