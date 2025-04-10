<?php
$title = "Bus Create";
ob_start();
include ("../../db/admin/bus.php");
if (session_status() === PHP_SESSION_NONE) {
    session_start(); // Start session only if it's not already started
}
if (isset($_POST["submit"]) ) {
    $data = $_POST;
    $result = create_bus($data);
    if ($result == true) {
        $_SESSION['success'] = 'Bus Created Successfully';
    } else {
        $_SESSION['error'] = 'Failed to create bus';
    }
    header("Location: ./index.php");
    exit;
}
?>

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Bus Create</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Bus Create</li>
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
                                                <label for="status">Bus number</label>                                               
                                                <input type="text" class="form-control" name="bus_number" value="" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="status">Capacity</label>                                               
                                                <input type="text" class="form-control" name="capacity" value="" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="status">Driver Name</label>                                               
                                                <input type="text" class="form-control" name="driver_name" value="" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="status">Driver Contact</label>                                               
                                                <input type="number" class="form-control" name="driver_phone" value="" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="status">status</label>                                               
                                                <select name="status" class="form-control" required>
                                                    <option value="active">Active</option>
                                                    <option value="inactive">Inactive</option>
                                                    <option value="maintenance">Maintanance</option>
                                                </select>
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