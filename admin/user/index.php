<?php
$title = "User List";
ob_start();
include ("../../db/admin/user.php");
?>

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>User List</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">User List</li>
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
                    <div class="card-header d-flex justify-content-end">
                        <a href="./create.php" class="btn btn-primary">Add New</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                    <tr>
                                        <th>Sl.</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Status</th>                                      
                                        <th>Action</th>
                                    </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            $data = all_user();    
                                               
                            if (empty($data)) {
                                echo '<tr><td colspan="7" class="text-center">No students found</td></tr>';
                            } else {
                                foreach ($data as $row) {                                    
                                    ?>
                                    <tr>
                                        <td><?php echo $i++; ?></td>
                                        <td><?php echo $row['username']; ?></td>
                                        <td><?php echo $row['email']; ?></td>
                                        <td><?php echo $row['role']; ?></td>
                                        <td>
                                            <?php 
                                            if( $row['status'] == 'approved'){
                                                echo '<span class="badge badge-success px-2 py-1">Approved</span>';
                                            }
                                            elseif($row['status'] == 'pending'){
                                                echo '<span class="badge badge-warning px-2 py-1">Pending</span>';
                                            }
                                            else{
                                                echo '<span class="badge badge-danger px-2 py-1">Rejected</span>';
                                            }
                                             ?>
                                        </td>
                                        <td>                                            
                                            <a href="./edit.php?id=<?php echo $row['id']; ?>" class="btn btn-secondary"><i class="fa fa-pen"></i></a>                                            
                                            <a href="./delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Status</th>                                      
                                        <th>Action</th>
                                </tr>
                        </tfoot>
                        </table>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
            </section>
<?php
$content = ob_get_clean();
include '../../layout/layout.php';
?>