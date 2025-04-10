<?php
$title = "Route Create";
ob_start();
include ("../../db/admin/route.php");
if (session_status() === PHP_SESSION_NONE) {
    session_start(); // Start session only if it's not already started
}
if (isset($_POST["submit"]) ) {
    $data = $_POST;
    $result = create_route($data);
    if ($result == true) {
        $_SESSION['success'] = 'Route Created Successfully';
    } else {
        $_SESSION['error'] = 'Failed to create route';
    }
    header("Location: ./index.php");
    exit;
}
?>

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Route Create</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Route Create</li>
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
                                        <form action="./create.php" method="post">
                                            <div class="form-group">
                                                <label for="status">Route Name</label>                                               
                                                <input type="text" class="form-control" name="route_name" value="" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="status">Start Point</label>                                               
                                                <input type="text" class="form-control" name="start_point" value="" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="status">End Point</label>                                               
                                                <input type="text" class="form-control" name="end_point" value="" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="status">Distance</label>                                               
                                                <input type="number" class="form-control" name="distance" value="" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="status">Amount</label>                                               
                                                <input type="number" class="form-control" name="amount" value="" required>
                                            </div>
                                            
                                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
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