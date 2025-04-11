<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$title = "Apply for Transport";
include($_SERVER['DOCUMENT_ROOT'] . "/db/student/transport.php");
include($_SERVER['DOCUMENT_ROOT'] . "/db/admin/route.php");

$result = null_any_colum();

if ($result ) {
  $_SESSION['error'] = 'Complete Your profile';
  header(header: "Location: /student/profile.php");
  exit;
}
else {
$check = check_reg();
if ($check) {
  $data = [$check];
} else {
  $data = all_route();
}
}
if(isset($_POST['submit'])) {
 
  $result = apply_transport($_POST);
  if ($result) {
    $_SESSION['success'] = 'Transport applied successfully';
    header('Location: /student/transport.php');
    exit;
  } else {
    $_SESSION['error'] = 'Something went wrong';
    header('Location: /student/transport.php');
    exit;
  }
}
ob_start();
?>

<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Apply for Transport</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Transport </li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Sl.</th>
                  <th>Route Name</th>
                  <th>Start Point</th>
                  <th>End Point</th>
                  <th>Distance</th>
                  <th>Fees</th>
                  <?php 
                  if($check == false) {
                    echo '<th>Action</th>';
                  }
                  else{
                    echo '<th>Status</th>';
                  }
                  ?>
                  
                </tr>
              </thead>
              <tbody>
                <?php
                $i = 1;
       
                if (empty($data)) {
                  echo '<tr><td colspan="7" class="text-center">No students found</td></tr>';
                } else {
                  foreach ($data as $row) {
                ?>
                    <tr>
                      <td><?php echo $i++; ?></td>
                      <td><?php echo $row['route_name']; ?></td>
                      <td><?php echo $row['start_point']; ?></td>
                      <td><?php echo $row['end_point']; ?></td>
                      <td><?php echo $row['distance']; ?></td>
                      <td><?php echo $row['amount']; ?></td>
                      <?php 
                    if($check == false) {                    
                    ?>
                      <td>
                        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
                          <input type="hidden" name="route_id" value="<?php echo $row['id']; ?>">
                          <input type="hidden" name="student_id" value="<?php echo $_SESSION['user_id']; ?>">
                          <input type="hidden" name="paid_amount" value="<?php echo $row['amount']; ?>">
                          <input type="hidden" name="payment_method" value="cash">
                          <input type="hidden" name="application_status" value="pending">
                        <button type="submit" name="submit" class="btn btn-info btn-sm">Apply</button>
                        </form>
                      </td>
                      <?php
                    }
                    else {
                      ?>
                      <td>
                        <?php
                        if($row['application_status'] == 'pending') {
                          echo '<span class="badge badge-warning">Pending</span>';
                        }
                        elseif($row['application_status'] == 'approved') {
                          echo '<span class="badge badge-success">Approved</span>';
                        }
                        elseif($row['application_status'] == 'rejected') {
                          echo '<span class="badge badge-danger">Rejected</span>';
                        }
                        ?>
                      </td>
                      <?php
                    }
                    ?>                    
                    </tr>
                <?php
                  }
                }
                ?>
              </tbody>
              <tfoot>
                <tr>
                  <th>Sl.</th>
                  <th>Route Name</th>
                  <th>Start Point</th>
                  <th>End Point</th>
                  <th>Distance</th>
                  <th>Fees</th>
                  <?php 
                  if($check == false) {
                    echo '<th>Action</th>';
                  }
                  else{
                    echo '<th>Status</th>';
                  }
                  ?>
                </tr>
              </tfoot>
            </table>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
      </div>
    </div>
  </div>
</section>

<?php
$content = ob_get_clean();
include '../layout/layout.php';
?>