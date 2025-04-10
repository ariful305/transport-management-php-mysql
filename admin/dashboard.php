<?php
$title = "Dashboard";

include ($_SERVER['DOCUMENT_ROOT'] ."/db/admin/dashboard.php");

$students = all_students();
$data = count_all();
$total_student = $data[0];
$total_bus = $data[1];
$total_route = $data[2];
$total_earn = $data[3];
ob_start();
?>

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <section class="content">
      <div class="container-fluid">
      <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo $total_student[0] ?></h3>

                <p>Total Registered Student</p>
              </div>
              <div class="icon">
                <i class="fa fa-users"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php echo $total_bus[0] ?></h3>

                <p>Total Bus Number</p>
              </div>
              <div class="icon">
              <i class="fas fa-bus"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?php echo $total_route[0] ?></h3>

                <p>Total Route Number</p>
              </div>
              <div class="icon">
              <i class="fas fa-route"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?php echo $total_earn[0] ?> Tk</h3>

                <p>Total Earn</p>
              </div>
              <div class="icon">
              <i class="fas fa-coins"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
        </div>
      </div><!-- /.container-fluid -->
    </section>

 <section class="content">
      <div class="container-fluid">
      <div class="row">
            <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Today Registereed Students</h3>
                    </div>

                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Sl.</th>
                                    <th>Image</th>
                                    <th>Student ID</th>
                                    <th>Student Name</th>
                                    <th>Department</th>
                                    <th>Route Name</th>
                                    <th>Application Status</th>
                               </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;

                                if (empty($students)) {
                                    echo '<tr><td colspan="7" class="text-center">No students found</td></tr>';
                                } else {
                                    foreach ($students as $row) {

                                ?>
                                        <tr>
                                            <td><?php echo $i++; ?></td>
                                            <td><img src="../../student/<?php echo $row['image'] ?>" alt="Student Image" width="50px"></td>
                                            <td><?php echo $row['student_id']; ?></td>
                                            <td><?php echo $row['first_name'] . " " . $row['last_name']; ?></td>
                                            <td><?php echo $row['department']  ?></td>
                                            <td><?php echo $row['route_name']; ?></td>

                                            <td>

                                                <?php
                                                if ($row['application_status'] == 'approved') {
                                                    echo '<span class="badge badge-success px-2 py-1">Approved</span>';
                                                } elseif ($row['application_status'] == 'pending') {
                                                    echo '<span class="badge badge-warning px-2 py-1">Pending</span>';
                                                } else {
                                                    echo '<span class="badge badge-danger px-2 py-1">Rejected</span>';
                                                }
                                                ?>
                                            </td>
                                            
                                        </tr>
                                <?php
                                    }
                                }
                                ?>
                            </tbody>
                           
                        </table>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>

        </div>
      </div><!-- /.container-fluid -->
    </section>



<?php
$content = ob_get_clean();
include '../layout/layout.php';
?>
