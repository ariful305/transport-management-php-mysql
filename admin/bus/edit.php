<?php
$title = "Bus Edit";
ob_start();
include ("../../db/admin/bus.php");
$data = get_bus_by_id($_GET['id']);
?>

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Bus Edit</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Bus Edit</li>
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
                                <input type="hidden" name="id" value="<?php echo $data['id']?>">
                                            <div class="form-group">
                                                <label for="status">Bus number</label>                                               
                                                <input type="text" class="form-control" name="bus_number" value="<?php echo $data['bus_number']?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="status">Capacity</label>                                               
                                                <input type="text" class="form-control" name="capacity" value="<?php echo $data['capacity']?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="status">Driver Name</label>                                               
                                                <input type="text" class="form-control" name="driver_name" value="<?php echo $data['driver_name']?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="status">Driver Contact</label>                                               
                                                <input type="number" class="form-control" name="driver_phone" value="<?php echo $data['driver_phone']?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="status">status</label>                                               
                                                <select name="status" class="form-control" required>
                                                    <option value="active" <?php echo ($data['status']=='active') ? 'selected':'' ?>>Active</option>
                                                    <option value="inactive" <?php echo ($data['status']=='inactive') ? 'selected':'' ?>>Inactive</option>
                                                    <option value="maintenance" <?php echo ($data['status']=='maintenance') ? 'selected':'' ?>>Maintanance</option>
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