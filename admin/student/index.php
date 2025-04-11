<?php
$title = "Student List";
ob_start();
include("../../db/admin/student.php");
?>

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Student List</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Student List</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

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
                                    <th>Image</th>
                                    <th>Student ID</th>
                                    <th>Student Name</th>
                                    <th>Department</th>
                                    <th>Route Name</th>
                                    <th>Due Amount</th>
                                    <th>Application Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                $students = all_student();

                                if (empty($students)) {
                                    echo '<tr><td colspan="7" class="text-center">No students found</td></tr>';
                                } else {
                                    foreach ($students as $row) {

                                ?>
                                        <tr>
                                            <td><?php echo $i++; ?></td>
                                            <td>
                                                <?php
                                                if(!empty($row['image'])) {
                                                    echo '<img src="../../student/' . $row['image'] . '" alt="Student Image" width="50px">';
                                                } else {
                                                    echo '<img src="/admin/uploads/avatar.png" alt="Default Image" width="50px">';
                                                }
                                               ?>
                                            </td>
                                            <td><?php echo $row['student_id']; ?></td>
                                            <td><?php echo $row['first_name'] . " " . $row['last_name']; ?></td>
                                            <td><?php echo $row['department']  ?></td>
                                            <td><?php echo $row['route_name']; ?></td>
                                            <td><?php echo $due = $row['amount'] - $row['paid_amount']; ?></td>

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
                                            <td>
                                                <a href="./view.php?id=<?php echo $row['application_id']; ?>" class="btn btn-info"><i class="fa fa-eye"></i></a>
                                                <a href="./edit.php?id=<?php echo $row['application_id']; ?>" class="btn btn-secondary"><i class="fa fa-pen"></i></a>
                                                <a href="./delete.php?id=<?php echo $row['application_id']; ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                <?php
                                    }
                                }
                                ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Sl.</th>
                                    <th>Image</th>
                                    <th>Student ID</th>
                                    <th>Student Name</th>
                                    <th>Department</th>
                                    <th>Route Name</th>
                                    <th>Due Amount</th>
                                    <th>Application Status</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>

        </div>
    </div>
    <!-- /.content -->
</section>
<?php
$content = ob_get_clean();
include '../../layout/layout.php';
?>