  <?php
  if (session_status() === PHP_SESSION_NONE) {
    session_start(); // Start session only if it's not already started
  }
  if(!isset($_SESSION['user_id']) && !isset($_SESSION['role']) == 'admin') {
    header("Location: /login.php");
    exit;
  }
  if($_SESSION['role'] == 'student' && strpos($_SERVER['REQUEST_URI'], '/admin/') === 0) {
    header("Location: /student/dashboard.php");
    exit;
  }
   if($_SESSION['role'] == 'admin' && strpos($_SERVER['REQUEST_URI'], '/student/') === 0) {
    header("Location: /admin/dashboard.php");
    exit;
  }
  
  $sql = "SELECT * FROM profiles WHERE user_id = '{$_SESSION['user_id']}'";
  $result = mysqli_query($conn, $sql);
  $profile = mysqli_fetch_assoc($result);  

?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title ?? 'Transport Management'; ?></title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/asset/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="/asset/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="/asset/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="/asset/plugins/jqvmap/jqvmap.min.css">


    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="/asset/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="/asset/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="/asset/plugins/summernote/summernote-bs4.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="/asset/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="/asset/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="/asset/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/asset/dist/css/adminlte.min.css">
  </head>

  <body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

      <!-- Preloader -->
      <!-- <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="/asset/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
      </div> -->

      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
            <a href="/index.php" class="nav-link">Home</a>
          </li>

        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
          <!-- Navbar Search -->
          <li class="nav-item">
            <a class="nav-link" data-widget="navbar-search" href="#" role="button">
              <i class="fas fa-search"></i>
            </a>
            <div class="navbar-search-block">
              <form class="form-inline">
                <div class="input-group input-group-sm">
                  <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                  <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                      <i class="fas fa-search"></i>
                    </button>
                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                      <i class="fas fa-times"></i>
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
              <i class="fas fa-expand-arrows-alt"></i>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.navbar -->

      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="/admin/dashboard.php" class="brand-link">
          <img src="/asset/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light">
            <?php 
            if($_SESSION['role'] == 'admin') {
              echo 'Admin';
            }
            else {
              echo 'Student';
            }
                ?>
                panel
            </span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <?php 
              if($_SESSION['role'] == 'admin') {
                ?>
                <img src="/asset/dist/img/avatar4.png" class="img-circle elevation-2" alt="User Image">
                <?php
              }
              else {
                ?>
                <img src="../../student/<?php echo $profile['image'] ?>" class="img-circle
                elevation-2" alt="User Image">
                <?php
              }
              ?>
            </div>
            <div class="info">
              <a href="/admin/dashboard.php" class="d-block"><?php echo  $_SESSION['username'] ?></a>
            </div>
          </div>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <?php 
            if($_SESSION['role'] == 'admin') {
              ?>
              <li class="nav-item">
                <a href="/admin/dashboard.php" class="nav-link <?php echo ($_SERVER['REQUEST_URI'] == '/admin/dashboard.php') ? 'active' : ''; ?>">
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                    Dashboard
                  </p>
                </a>
              </li>
              <li class="nav-item">
                  <a href="/admin/student/index.php" class="nav-link <?php echo (strpos($_SERVER['REQUEST_URI'], '/admin/student/') === 0) ? 'active' : ''; ?>">  <i class="nav-icon fas fa-users"></i>
                      <p>
                        Student List
                      </p>
                    </a>
              </li>

              <li class="nav-item">
                  <a href="/admin/route/index.php" class="nav-link <?php echo (strpos($_SERVER['REQUEST_URI'], '/admin/route/') === 0) ? 'active' : ''; ?>">  <i class="nav-icon fas fa-route"></i>
                      <p>
                        Route List
                      </p>
                    </a>
              </li>

            <li class="nav-item">
                  <a href="/admin/bus/index.php" class="nav-link <?php echo (strpos($_SERVER['REQUEST_URI'], '/admin/bus/') === 0) ? 'active' : ''; ?>">  <i class="nav-icon fas fa-bus"></i>
                      <p>
                        Bus List
                      </p>
                    </a>
              </li>

            <li class="nav-item">
                  <a href="/admin/shedule/index.php" class="nav-link <?php echo (strpos($_SERVER['REQUEST_URI'], '/admin/shedule/') === 0) ? 'active' : ''; ?>">  <i class="nav-icon fas fa-th"></i>
                      <p>
                      Shedule Bus 
                      </p>
                    </a>
              </li>
              <li class="nav-item">
                  <a href="/admin/user/index.php" class="nav-link <?php echo (strpos($_SERVER['REQUEST_URI'], '/admin/user/') === 0) ? 'active' : ''; ?>">  <i class="nav-icon fa fa-users"></i>
                      <p>
                      User List 
                      </p>
                    </a>
              </li>
            <?php
            }
            else {
              ?>
              <li class="nav-item">
                  <a href="/student/dashboard.php" class="nav-link <?php echo ($_SERVER['REQUEST_URI'] == '/student/dashboard.php') ? 'active' : ''; ?>">  <i class="nav-icon fas fa-th"></i>
                      <p>
                     Dashboard
                      </p>
                    </a>
              </li>
               <li class="nav-item">
                  <a href="/student/transport.php" class="nav-link <?php echo ($_SERVER['REQUEST_URI'] == '/student/transport.php') ? 'active' : ''; ?>">  <i class="nav-icon fas fa-th"></i>
                      <p>
                     Apply for transport
                      </p>
                    </a>
              </li>
              <li class="nav-item">
                  <a href="/student/profile.php" class="nav-link <?php echo ($_SERVER['REQUEST_URI'] == '/student/profile.php') ? 'active' : ''; ?>">  <i class="nav-icon fas fa-th"></i>
                      <p>
                     Profile
                      </p>
                    </a>
              </li>
              <?php
            }
            ?>
              <li class="nav-item">
                  <a href="/logout.php" class="nav-link ">  <i class="nav-icon fas fa-th"></i>
                      <p>
                        Log out
                      </p>
                    </a>
              </li>
            </ul>
          </nav>
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->

        <!-- /.content-header -->

        <?php echo $content ?? ''; ?>
        <!-- Main content -->

        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
      <footer class="main-footer">
        <strong>Copyright &copy; 2025 <a href="javascript:">Transport Management</a>.</strong>
        All rights reserved.

      </footer>

      <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="/asset/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="/asset/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="/asset/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="/asset/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="/asset/plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="/asset/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="/asset/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="/asset/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="/asset/plugins/moment/moment.min.js"></script>
    <script src="/asset/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="/asset/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="/asset/plugins/summernote/summernote-bs4.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- DataTables  & Plugins -->
    <script src="/asset/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="/asset/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="/asset/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="/asset/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="/asset/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="/asset/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="/asset/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="/asset/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

    <!-- bs-custom-file-input -->
<script src="/asset/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="/asset/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/asset/dist/js/adminlte.js"></script>

    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="/asset/dist/js/pages/dashboard.js"></script>
    <script>
document.getElementById('exampleInputFile').addEventListener('change', function(event) {
    var input = event.target;
    var file = input.files[0];

    if (file) {
        var reader = new FileReader();
        reader.onload = function(e) {
            var img = document.getElementById('profile_image');
            img.src = e.target.result;
            img.style.display = 'block'; // Show the image
        };
        reader.readAsDataURL(file);
    }
});
</script>
    <script>
$(function () {
  bsCustomFileInput.init();
});
</script>
    <script>
<?php
    if (isset($_SESSION['success'])) {
      echo 'Swal.fire({
          title: "Success",
          text: "'.$_SESSION['success'].'",
          icon: "success"
      });';
      unset($_SESSION['success']); // Corrected variable
  }
  
  if (isset($_SESSION['error'])) {
      echo 'Swal.fire({
          title: "Error",
          text: "'.$_SESSION['error'].'",
          icon: "error"
      });';
      unset($_SESSION['error']); // Corrected variable
  }
?>
</script>
    <script>
      
      $(function() {
        
        $("#example1").DataTable({
          "responsive": true,
          "lengthChange": false,
          "autoWidth": false,
        });

      });
    </script>
  </body>

  </html>