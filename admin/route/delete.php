<?php
session_start();
include("../../db/admin/route.php");

$result = delete_route($_GET['id']);

if ($result == true) {
    $_SESSION['success'] = 'Route Deleted successfully!';
} else {
    $_SESSION['error'] = 'Failed to Deleted Route';
}
header("Location: ./index.php");
exit;
