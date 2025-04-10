<?php
$title = "Bus List";
ob_start();
include ($_SERVER['DOCUMENT_ROOT'] ."/db/admin/bus.php");
?>

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Bus List</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Bus List</li>
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
                                        <th>Bus Number</th>
                                        <th>Bus Capacity</th>
                                        <th>Driver Name</th>
                                        <th>Driver Contact</th>
                                        <th>Status</th>                                      
                                        <th>Action</th>
                                    </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            $data = all_bus();    
                                               
                            if (empty($data)) {
                                echo '<tr><td colspan="7" class="text-center">No students found</td></tr>';
                            } else {
                                foreach ($data as $row) {                                    
                                    ?>
                                    <tr>
                                        <td><?php echo $i++; ?></td>
                                        <td><?php echo $row['bus_number']; ?></td>
                                        <td><?php echo $row['capacity']; ?></td>
                                        <td><?php echo $row['driver_name']; ?></td>
                                        <td><?php echo $row['driver_phone']; ?></td>
                                        <td>
                                            <?php 
                                            if( $row['status'] == 'active'){
                                                echo '<span class="badge badge-success px-2 py-1">Active</span>';
                                            }
                                            elseif($row['status'] == 'maintenance'){
                                                echo '<span class="badge badge-warning px-2 py-1">Maintenance</span>';
                                            }
                                            else{
                                                echo '<span class="badge badge-danger px-2 py-1">Inactive</span>';
                                            }
                                             ?>
                                        </td>
                                        <td>                                            
                                            <a href="./view.php?id=<?php echo $row['id']; ?>" class="btn btn-info"><i class="fa fa-eye"></i></a>
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
                                        <th>Bus Number</th>
                                        <th>Bus Capacity</th>
                                        <th>Driver Name</th>
                                        <th>Driver Contact</th>
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