<?php
session_start();
include("../../db/admin/student.php");

$result = delete_student($_GET['id']);

if ($result == true) {
    $_SESSION['success'] = 'Application Deleted successfully!';
} else {
    $_SESSION['error'] = 'Failed to Deleted Application';
}
header("Location: ./index.php");
exit;
