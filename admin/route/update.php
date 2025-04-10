<?php
session_start();
include ("../../db/admin/route.php");

// Validate inputs
if (!isset($_POST['id']) || !is_numeric($_POST['id']) ) {
    $_SESSION['error'] = 'Invalid input data';
    header("Location: ./index.php");
    exit;
}
$id = $_POST["id"];
$formData = $_POST;

// Update 
$result = route_update($id, $formData);

if ($result == true) {
    $_SESSION['success'] = 'Route Updated Successfully';
} else {
    $_SESSION['error'] = 'Failed to update route';
}
header("Location: ./index.php");
exit;
?>