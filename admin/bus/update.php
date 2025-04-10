<?php
session_start();
include ("../../db/admin/bus.php");

// Validate inputs
if (!isset($_POST['id']) || !is_numeric($_POST['id']) ) {
    $_SESSION['error'] = 'Invalid input data';
    header("Location: ./index.php");
    exit;
}
$id = $_POST["id"];
$formData = $_POST;

// Update 
$result = bus_update($id, $formData);

if ($result == true) {
    $_SESSION['success'] = 'Bus Updated Successfully';
} else {
    $_SESSION['error'] = 'Failed to update bus';
}
header("Location: ./index.php");
exit;
?>