<?php
session_start();
include("../../db/admin/bus.php");

$result = delete_bus($_GET['id']);

if ($result == true) {
    $_SESSION['success'] = 'Bus Deleted successfully!';
} else {
    $_SESSION['error'] = 'Failed to Deleted bus';
}
header("Location: ./index.php");
exit;
