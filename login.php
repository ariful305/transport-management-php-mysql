<?php
// Start session
session_start();

// Include database connection
 include './db/db.php';

// Check if user is already logged in
if(isset($_SESSION['user_id'])) {
    // Redirect based on user role
    if($_SESSION['role'] == 'admin') {
        header("Location: ../admin/dashboard.php");
    } else {
        header("Location: ../student/dashboard.php");
    }
    exit;
}


// Initialize error variable
$error = "";

// Process login form
if(isset($_POST['login'])) {
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    $pass = md5($password);
    // Validate input
    if(empty($username) || empty($password)) {
        $error = "Username and password are required";
    } else {
      
        // Query the database for the user
        $sql = "SELECT id, username, password, role, status FROM users WHERE username = '$username' && password = '$pass'";
        $result = $conn->query($sql);
      
        if($result->num_rows == 1) {
            $user = $result->fetch_assoc();
            
                if($user['status'] == 'approved') {
                    // Set session variables
                    $_SESSION['user_id'] = $user['id'];
                    $_SESSION['username'] = $user['username'];
                    $_SESSION['role'] = $user['role'];
                    
                    // Redirect based on user role
                    if($user['role'] == 'admin') {
                        header("Location: admin/dashboard.php");
                    } else {
                        header("Location: student/dashboard.php");
                    }
                    exit;
                } else {
                    $error = "Your account is pending approval";
                }
            
        } else {
            $error = "Invalid username or password";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Log in </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/asset/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="/asset/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/asset/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="javascript:0" class="h1"><b>Transport </b>Portal</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <!-- Display error message -->
      <?php if(!empty($error)): ?>
        <div class="alert alert-danger">
          <?php echo $error; ?>
        </div>
      <?php endif; ?>

      <form action="login.php" method="post" class="mb-3">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Username" name="username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
         
          <!-- /.col -->
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block" name="login">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <a href="/register.php" class="text-center mt-3">Create a account</a>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="/asset/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/asset/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/asset/dist/js/adminlte.min.js"></script>
</body>
</html>