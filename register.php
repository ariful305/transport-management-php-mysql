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
if(isset($_POST['submit'])) {
   // Get form data
  $username = $_POST['username'];
  $email = $_POST['email'];
   $password = $_POST['password'];
   
   // Validate password strength
   if (strlen($password) < 8) {
       $_SESSION['error'] = 'Password must be at least 8 characters long';
       header("Location: ./register.php");
       exit;
   }
    // Validate input
    if(empty($username) || empty($password)) {
        $error = "Username and password are required";
    } else {
      
      $sql = "SELECT * FROM users WHERE email = '$email' OR username = '$username'";
      $result = mysqli_query($conn, $sql);
      
      if (mysqli_num_rows($result) > 0) {
          $_SESSION['error'] = 'Username or email already exists';
          header("Location: ./register.php");
          exit;
      } else {
          // Process the data if validation passes
          $data = $_POST;
          $query = "INSERT INTO users (username, email, password, role,status) VALUES ('".$data['username']."', '".$data['email']."', '".md5($data['password'])."', 'student','approved' )";
          $result = mysqli_query($conn, $query);
            
          $sql = "SELECT id, username, password, role, status FROM users WHERE username = '{$data['username']}' && password = '".md5($data['password'])."'";
          $result = mysqli_query($conn, $sql);        
          if($result->num_rows == 1) {
              $user = mysqli_fetch_assoc($result);
              
                  if($user['status'] == 'approved') {
                      // Set session variables
                      $_SESSION['user_id'] = $user['id'];
                      $_SESSION['username'] = $user['username'];
                      $_SESSION['role'] = $user['role'];
                      
                      // Redirect based on user role
                      if($user['role'] == 'admin') {
                          header("Location: admin/dashboard.php");
                      } else {
                          header("Location: student/profile.php");
                      }
                      exit;
                  } else {
                      $error = "Your account is pending approval";
                  }
              
          }
          
     }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Register</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/asset/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="/asset/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/asset/dist/css/adminlte.min.css">
</head>
<body class="register-page" style="min-height: 545.344px;">
<div class="register-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="../../index2.html" class="h1"><b>Transport </b>Portal</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Register in transport</p>
      <?php if(isset($_SESSION['error'])): ?>
                            <div class="alert alert-danger">
                                <?php 
                                    echo $_SESSION['error']; 
                                    unset($_SESSION['error']);
                                ?>
                            </div>
                        <?php endif; ?>
      <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" class="mb-3">

        <div class="input-group mb-3">
          <input type="text" class="form-control" name="username" placeholder="Username" spellcheck="false" data-ms-editor="true">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" name="email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password"   name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
       
        <div class="row">         
          <!-- /.col -->
          <div class="col-12">
            <button type="submit" name="submit" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <a href="/login.php" class="text-center mt-3">I already have a account</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js?v=3.2.0"></script>


</body>
</html>