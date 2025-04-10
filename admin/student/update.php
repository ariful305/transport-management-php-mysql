<?php
session_start();
include ("../../db/admin/student.php");

// Validate inputs
if (!isset($_POST['id']) || !is_numeric($_POST['id']) || !isset($_POST['application_status'])) {
    $_SESSION['error'] = 'Invalid input data';
    header("Location: ./index.php");
    exit;
}
$id = $_POST["id"];
$status = $_POST['application_status'];
// Update status
$result = status_update($id, $status);

if ($result == true) {
    $_SESSION['success'] = 'Status Updated Successfully';
} else {
    $_SESSION['error'] = 'Failed to update status';
}
header("Location: ./index.php");
exit;
?>