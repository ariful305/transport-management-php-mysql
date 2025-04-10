<?php
$title = "Route  Data";
ob_start();
include ("../../db/admin/route.php");

$data = get_route_by_id($_GET['id']);

?>

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Route View</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Route View</li>
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
                    
                            <div class="row">
                                <div class="col-md-6">
                                <table class="table table-bordered table-striped mt-3 ">
                                        <tr>
                                            <th>Route Name</th>
                                            <td><?php echo $data['route_name'] ?></td>
                                        </tr>
                                        <tr>
                                            <th>Start point</th>
                                            <td><?php echo $data['start_point'] ?></td>
                                        </tr>
                                        <tr>
                                            <th>End point</th>
                                            <td><?php echo $data['end_point']  ?></td>
                                        </tr>
                                        <tr>
                                            <th>Distant</th>
                                            <td><?php echo $data['distance'] ?></td>
                                        </tr>
                                        <tr>
                                            <th>Fees</th>
                                            <td><?php echo $data['amount'] ?></td>
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