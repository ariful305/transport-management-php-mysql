<?php
session_start();
include($_SERVER['DOCUMENT_ROOT'] ."/db/admin/user.php");

if (isset($_POST["submit"])) {
    // Get form data
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    // Validate password strength
    if (strlen($password) < 8) {
        $_SESSION['error'] = 'Password must be at least 8 characters long';
        header("Location: ./edit.php?id=" . $_POST['id']);
        exit;
    }
   
    // Check if username or email already exists
    $sql = "SELECT * FROM users WHERE (email = '$email' OR username = '$username') AND id != " . $_POST['id'];
    $result = mysqli_query($conn, $sql);
    
    
    if (mysqli_num_rows($result) > 0) {
        $_SESSION['error'] = 'Username or email already exists';
        header("Location: ./edit.php?id=" . $_POST['id']);
        exit;
    } else {
        // Process the data if validation passes
        $data = $_POST;
        $result = update_user($data);
        
        if ($result == true) {
            $_SESSION['success'] = 'User updated Successfully';
            header("Location: ./index.php");
        } else {
            $_SESSION['error'] = 'Failed to update user';
            header("Location: ./edit.php?id=" . $_POST['id']);
        }
        exit;
    }
}
?>