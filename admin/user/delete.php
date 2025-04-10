<?php
session_start();
include($_SERVER['DOCUMENT_ROOT'] ."/db/admin/user.php");

$result = delete_user($_GET['id']);

if ($result == true) {
    $_SESSION['success'] = 'User Deleted successfully!';
} else {
    $_SESSION['error'] = 'Failed to Deleted user';
}
header("Location: ./index.php");
exit;
