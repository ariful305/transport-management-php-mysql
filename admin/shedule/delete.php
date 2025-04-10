<?php
session_start();
include("../../db/admin/shedule.php");

$result = delete_shedule($_GET['id']);

if ($result == true) {
    $_SESSION['success'] = 'Shedule Bus Deleted successfully!';
} else {
    $_SESSION['error'] = 'Failed to Deleted Shedule Bus ';
}
header("Location: ./index.php");
exit;
