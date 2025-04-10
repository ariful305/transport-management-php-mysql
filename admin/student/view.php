<?php
$title = "Student Data";
ob_start();
include ("../../db/admin/student.php");

$data = get_student($_GET['id']);
?>

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Student View</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Student View</li>
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
                        
                            <img src="../../student/<?php echo $data['image'] ?>" alt="<?php  ?>"  width="250px" class="border border-secondary p-1 mb-4">

                            <div class="row">
                                <div class="col-md-6">
                                <table class="table table-bordered table-striped mt-3 ">
                                        <tr>
                                            <th>Application ID</th>
                                            <td><?php echo $data['application_id'] ?></td>
                                        </tr>
                                        <tr>
                                            <th>Student ID</th>
                                            <td><?php echo $data['student_id'] ?></td>
                                        </tr>
                                        <tr>
                                            <th>Student Name</th>
                                            <td><?php echo $data['first_name'] ." " .$data['last_name'] ?></td>
                                        </tr>
                                        <tr>
                                            <th>Department</th>
                                            <td><?php echo $data['department'] ?></td>
                                        </tr>
                                        <tr>
                                            <th>Email</th>
                                            <td><?php echo $data['email'] ?></td>
                                        </tr>
                                        <tr>
                                            <th>Phone Number</th>
                                            <td><?php echo $data['phone_number'] ?></td>
                                        </tr>
                                        <tr>
                                            <th>Address</th>
                                            <td><?php echo $data['address'] ?></td>
                                        </tr>
                                        <tr>
                                            <th>City</th>
                                            <td><?php echo $data['city'] ?></td>
                                        </tr>
                                        <tr>
                                            <th>State</th>
                                            <td><?php echo $data['state'] ?></td>
                                        </tr>
                                        <tr>
                                            <th>Postal Code</th>
                                            <td><?php echo $data['postal_code'] ?></td>
                                        </tr>
                                        <tr>
                                            <th>Route Name</th>
                                            <td><?php echo $data['route_name'] ?></td>
                                        </tr>
                                        <tr>
                                            <th>Start Point</th>
                                            <td><?php echo $data['start_point'] ?></td>
                                        </tr>
                                        <tr>
                                            <th>End Point</th>
                                            <td><?php echo $data['end_point'] ?></td>
                                        </tr>
                                        <tr>
                                            <th>Distance</th>
                                            <td><?php echo $data['distance'] ?></td>
                                        </tr>
                                        <tr>
                                            <th>Amount</th>
                                            <td><?php echo $data['amount'] ?></td>
                                        </tr>
                                        <tr>
                                            <th>Application Status</th>
                                            <td>
                                                <?php 
                                                        if( $data['application_status'] == 'approved'){
                                                            echo '<span class="badge badge-success px-2 py-1">Approved</span>';
                                                        }
                                                        elseif($data['application_status'] == 'pending'){
                                                            echo '<span class="badge badge-warning px-2 py-1">Pending</span>';
                                                        }
                                                        else{
                                                            echo '<span class="badge badge-danger px-2 py-1">Rejected</span>';
                                                        }
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Payment Method</th>
                                            <td><?php echo $data['payment_method'] ?></td>
                                        </tr>
                                        <tr>
                                            <th>Paid Amount</th>
                                            <td><?php echo $data['paid_amount'] ?></td>
                                        </tr>
                                        <tr>
                                            <th>Created At</th>
                                            <td><?php echo $data['created_at'] ?></td>
                                        </tr>
                                        
                                </table>
                                </div>
                            </div>
               

                        </div>
                      
                    <!-- /.row -->
                </div>
            </section>
<?php
$content = ob_get_clean();
include '../../layout/layout.php';
?>