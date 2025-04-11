<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include("./db/admin/shedule.php");
include($_SERVER['DOCUMENT_ROOT']."/db/admin/route.php");

$route = all_route();

if (isset($_REQUEST["route_name"]) && !empty($_REQUEST["route_name"])) {
    $route_name = $_REQUEST["route_name"]; 
    $data = search_shedule($route_name);
} else {
    $data = all_shedule(); 
}


ob_start();
?>

<section class="content">
    <div class="container-fluid">
        <div class="row d-flex justify-content-center">

            <div class="col-10 mt-3">
                <div class="card">
                    <div class="card-header d-flex">
                        <h3><b>Transport shedule</b></h3>
                        <a href="./login.php" class="btn btn-primary btn-md ml-3">Login</a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="col-md-10 mb-3">
                            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                                <div class="row">
                                    <div class="col-4">
                                        <input  list="route" type="search" name="route_name"  class="form-control" placeholder="Search by route name" value="<?php echo isset($_REQUEST['route_name']) ? $_REQUEST['route_name'] : ''; ?>">
                                        <datalist id="route">
                                        <?php foreach ($route as $r) { ?>
                                                <option value="<?php echo $r['route_name']; ?>"><?php echo $r['route_name']; ?></option>
                                        <?php } ?>
                                        </datalist>
                                       
                                    </div>
                                    <div class="col">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                    </div>
                                </div>
                            </form>
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
                                                $departure_time = $row['departure_time']; 
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
                            <!-- <tfoot>
                                <tr>
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
include './layout/frontend.php';
?>