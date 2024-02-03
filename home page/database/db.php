<?php
require_once 'databaseConn.php';

$db = new databaseConn();
$con = $db->startConnection();

if (!$con) {
    echo "Connection failed";
} else {
    echo "Connection successful!";
}
?>