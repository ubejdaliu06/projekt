<?php
include_once 'VapeRepository.php';
$id = $_GET['Id'];//e merr id prej url

$strep = new VapeRepository();
$strep->deleteVape($id);

header("location:Dashboard.php");
?>