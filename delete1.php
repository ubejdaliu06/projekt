<?php
include_once 'ShishaRespsitory.php';
$id = $_GET['shisha_Id'];//e merr id prej url

$strep = new ShishaRespsitory();
$strep->deletePaisja($id);

header("location:Dashboard.php");
?>
