<?php
$title = "User Edit";
ob_start();
include($_SERVER['DOCUMENT_ROOT'] ."/db/admin/user.php");
if (session_status() === PHP_SESSION_NONE) {
    session_start(); // Start session only if it's not already started
}

$data = get_user_by_id($_GET['id']);

?>

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>User Edit</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">User Edit</li>
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
                    <?php if(isset($_SESSION['error'])): ?>
                            <div class="alert alert-danger">
                                <?php 
                                    echo $_SESSION['error']; 
                                    unset($_SESSION['error']);
                                ?>
                            </div>
                        <?php endif; ?>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <form action="./update.php" method="post">
                                    <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                                    <div class="form-group">
                                        <label for="username">Username</label>
                                        <input type="text" class="form-control" id="username" name="username" value="<?php echo $data['username'] ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" value="<?php echo $data['email'] ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" id="password" name="password" value="<?php echo $data['password'] ?>" required>
                                        <small class="text-muted">Password must be at least 8 characters long</small>
                                    </div>

                                    <div class="form-group">
                                        <label for="status">Status</label>
                                        <select name="status" class="form-control" required>
                                            <option value="approved" <?php echo $data['status'] == 'approved' ? 'selected' : '' ?>>Approved</option>
                                            <option value="pending" <?php echo $data['status'] == 'pending' ? 'selected' : '' ?>>Pending</option>
                                            <option value="rejected" <?php echo $data['status'] == 'rejected' ? 'selected' : '' ?>>Rejected</option>
                                        </select>
                                    </div>

                                    <button type="submit" name="submit" class="btn btn-primary">Update</button>
                                </form>
                            </div>
                        </div>

                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
    </div>

</section>
<?php
$content = ob_get_clean();
include '../../layout/layout.php';
?>