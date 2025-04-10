<?php
session_start();
include ("../../db/admin/shedule.php");

// Validate inputs
if (!isset($_POST['id']) || !is_numeric($_POST['id']) ) {
    $_SESSION['error'] = 'Invalid input data';
    header("Location: ./index.php");
    exit;
}
$id = $_POST["id"];
$formData = $_POST;

// Update 
$result = shedule_update($id, $formData);

if ($result == true) {
    $_SESSION['success'] = 'Bus Shedule Updated Successfully';
} else {
    $_SESSION['error'] = 'Failed to update bus shedule';
}
header("Location: ./index.php");
exit;
?>