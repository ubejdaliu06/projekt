<?php
include_once 'VapeRepository.php';
$id = $_GET['id'];

$strep = new VapeRepository();
$strep->deleteVape($id);

header("location:Dashboard.php");
?>