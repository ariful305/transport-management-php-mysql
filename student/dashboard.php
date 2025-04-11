<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$title = "Dashboard";

include($_SERVER['DOCUMENT_ROOT'] . "/db/admin/shedule.php");
include($_SERVER['DOCUMENT_ROOT'] . "/db/student/transport.php");


$check = check_reg();
$check['route_name'] = ($check['start_point'] == 'DSC') ? $check['end_point'] : $check['start_point'];

if ($check == false) {
  $data = NULL;
}
else{
  $data =  search_shedule($check['route_name']);
}

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
        <div class="row ">

            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3><b>Transport shedule</b></h3>
                    </div>
                      <!-- /.card-header -->
                    <div class="card-body">
                        <div class="col-md-10 mb-3">
                           
                        </div>
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Sl.</th>
                                    <th>Route Name</th>
                                    <th>Bus Number</th>
                                    <th>Bus Capacity</th>
                                    <th>Departure Time</th>
                                    <th>Available</th>
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
                                            <td><?php echo $row['bus_number']; ?></td>
                                            <td><?php echo $row['capacity']; ?></td>
                                            <td>
                                                <?php
                                                echo date('g:i A', timestamp: strtotime($row['departure_time']));
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                $departure_time = $row['departure_time']; // Example departure time (HH:MM:SS format)
                                                // Get current time in Bangladesh time zone (Asia/Dhaka)
                                                $dateTime = new DateTime("now", new DateTimeZone('Asia/Dhaka'));
                                                $current_time = $dateTime->format('H:i:s');

                                                // Convert times to DateTime objects
                                                $departure = new DateTime($departure_time);
                                                $current = new DateTime($current_time);

                                                // Calculate the difference
                                                if ($current > $departure) {
                                                    echo '<img src="https://w7.pngwing.com/pngs/496/734/png-transparent-wrong-sign-illustration-computer-icons-mathematics-delete-button-angle-rectangle-logo-thumbnail.png" width="20px"> Bus has already left';
                                                } else {
                                                    $interval = $current->diff($departure);
                                                    echo '<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3b/Eo_circle_green_checkmark.svg/1200px-Eo_circle_green_checkmark.svg.png" width="20px"> Bus will leave in ' . $interval->format('%H hours, %I minutes');
                                                }
                                                ?>
                                            </td>

                                        </tr>
                                <?php
                                    }
                                }
                                ?>
                            </tbody>
                            <tfoot>
                                <!-- <tr>
                                    <th>Sl.</th>
                                    <th>Route Name</th>
                                    <th>Bus Number</th>
                                    <th>Bus Capacity</th>
                                    <th>Departure Time</th>
                                    <th>Available</th>
                                </tr>
                            </tfoot> -->
                        </table>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
        </div>
    </div>

</section>
<?php
$content = ob_get_clean();
include '../layout/layout.php';
?>
