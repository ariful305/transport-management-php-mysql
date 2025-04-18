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
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <!-- Theme style -->
    <link rel="stylesheet" href="/asset/dist/css/adminlte.min.css">
    <style>
        body{
            background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
    background-size: 400% 400%;
    animation: gradient 10s ease infinite;
        }
        @keyframes gradient {
    0% {
        background-position: 0% 50%;
    }
    50% {
        background-position: 100% 50%;
    }
    100% {
        background-position: 0% 50%;
    }
}
    </style>
  </head>

  <body class="container-fluid">
    <div class="wrapper mt-5">

      

      <!-- Content Wrapper. Contains page content -->
      
        <!-- Content Header (Page header) -->

        <!-- /.content-header -->

        <?php echo $content ?? ''; ?>
        <!-- Main content -->

        <!-- /.content -->
      
      <!-- /.content-wrapper -->
     

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

    <!-- overlayScrollbars -->
    <script src="/asset/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/asset/dist/js/adminlte.js"></script>

    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="/asset/dist/js/pages/dashboard.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

  <script>
    // In your Javascript (external .js resource or <script> tag)
$(document).ready(function() {
    $('#route_id').select2();
});
  </script>
    <script>
      $(function() {
        
        $("#example1").DataTable({
          "responsive": true,
          "lengthChange": false,
          "autoWidth": false,
          "searching": false,
        });

      });
    </script>
  </body>

  </html>