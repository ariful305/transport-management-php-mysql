<?php
$title = "Route Edit";
ob_start();
include ("../../db/admin/route.php");
$data = get_route_by_id($_GET['id']);
?>

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Route Edit</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Route Edit</li>
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
                                        <form action="./update.php" method="post">
                                            <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                                            <div class="form-group">
                                                <label for="status">Route Name</label>                                               
                                                <input type="text" class="form-control" name="route_name" value="<?php echo $data['route_name']; ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="status">Start Point</label>                                               
                                                <input type="text" class="form-control" name="start_point" value="<?php echo $data['start_point']; ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="status">End Point</label>                                               
                                                <input type="text" class="form-control" name="end_point" value="<?php echo $data['end_point']; ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="status">Distance</label>                                               
                                                <input type="text" class="form-control" name="distance" value="<?php echo $data['distance']; ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="status">Amount</label>                                               
                                                <input type="text" class="form-control" name="amount" value="<?php echo $data['amount']; ?>" required>
                                            </div>
                                            
                                            <button type="submit" class="btn btn-primary">Update</button>
                                    </form>
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