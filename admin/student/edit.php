<?php
$title = "Status Update";
ob_start();
include ("../../db/admin/student.php");
$data = get_student($_GET['id']);
?>

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Status Update</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Status Update</li>
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
                                        <div class="form-group">
                                        <input type="hidden" name="id" value="<?php echo $data['application_id']; ?>">

                                                <label for="status">Status</label>                                               
                                                <select class="form-control" name="application_status" id="application_status">
                                                    <option value="approved" <?php echo ($data['application_status']=='approved') ? 'selected':'' ?>>Approved</option>
                                                    <option value="pending" <?php echo ($data['application_status']=='pending') ? 'selected':'' ?> >Pending</option>
                                                    <option value="rejected" <?php echo ($data['application_status']=='rejected') ? 'selected':'' ?>>Rejected</option>
                                                </select>
                                            </div>
                                            <input type="hidden" name="student_id" value="<?php echo $_GET['id']; ?>">
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