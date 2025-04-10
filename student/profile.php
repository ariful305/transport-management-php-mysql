<?php
session_start();
$title = "Profile";
include($_SERVER['DOCUMENT_ROOT'] . "/db/student/profile.php");

$data = getStudentProfile($_SESSION['user_id']);
if($data == null){
  $sql = "SELECT * FROM users WHERE id = {$_SESSION['user_id']}";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result);
}
// If no profile data exists, create empty placeholder data
if (!$data) {
    $data = [
        'id' => null,
        'user_id' => $_SESSION['user_id'],
        'first_name' => '',
        'last_name' => '',
        'username' => $_SESSION['username'] ?? '',
        'email' => $row['email'] ?? '',
        'student_id' => '',
        'department' => '',
        'phone_number' => '',
        'address' => '',
        'city' => '',
        'state' => '',
        'postal_code' => '',
        'image' => 'uploads/default-profile.jpg' // Make sure this file exists
    ];
}

if (isset($_POST['submit'])) {

   $result = update_profile($_POST, $_FILES);

  if ($result == true) {
    $_SESSION['success'] = 'Profile Updated Successfully';
  } else {
    $_SESSION['error'] = 'Failed to update profile';
  }
  header("Location: ./profile.php");
  exit;
}
ob_start();
?>

<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Profile</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Profile </li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-8">
        <div class="card">

          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
                  <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                  <input type="hidden" name="user_id" value="<?php echo $data['user_id'] ?>">
                  <div class="row ">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="status">First Name</label>
                        <input type="text" class="form-control" name="first_name" value="<?php echo $data['first_name'] ?>" required>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="status">last Name</label>
                        <input type="text" class="form-control" name="last_name" value="<?php echo $data['last_name'] ?>" required>
                      </div>
                    </div>
                  </div>

                  <div class="row ">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="status">Username</label>
                        <input type="text" class="form-control" name="username" value="<?php echo $data['username'] ?>" disabled>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="status">Email</label>
                        <input type="text" class="form-control" name="email" value="<?php echo $data['email'] ?>" disabled>
                      </div>
                    </div>
                  </div>

                  <div class="row ">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="status">Student Id</label>
                        <input type="text" class="form-control" name="student_id" value="<?php echo $data['student_id'] ?>" required>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="status">Department</label>
                        <input type="text" class="form-control" name="department" value="<?php echo $data['department'] ?>" required>
                      </div>
                    </div>
                  </div>

                  <div class="row ">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="status">Phone Number</label>
                        <input type="text" class="form-control" name="phone_number" value="<?php echo $data['phone_number'] ?>" required>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="status">Address</label>
                        <input type="text" class="form-control" name="address" value="<?php echo $data['address'] ?>" required>
                      </div>
                    </div>
                  </div>

                  <div class="row ">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="status">City</label>
                        <input type="text" class="form-control" name="city" value="<?php echo $data['city'] ?>" required>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="status">State</label>
                        <input type="text" class="form-control" name="state" value="<?php echo $data['state'] ?>" required>
                      </div>
                    </div>
                  </div>

                  <div class="row ">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="status">Postal Code</label>
                        <input type="text" class="form-control" name="postal_code" value="<?php echo $data['postal_code'] ?>" required>
                      </div>
                    </div>

                  </div>

                  <div class="row mb-5">
                    <div class="col-md-6">
                      <label for="status">Profile Picture</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="exampleInputFile" name="image" required>
                          <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                        <div class="input-group-append">
                          <span class="input-group-text">Upload</span>
                        </div>
                      </div>
                    </div>
                    <img src="./<?php echo $data['image'] ?>" alt="" width="250px">
                    <div class="col-md-6 mt-3">
                      <img id="profile_image" src="" alt="Profile Image" style="max-width: 150px; display: none; border-radius: 5px;">
                    </div>
                  </div>


                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </form>
              </div>
            </div>

          </div>
          <!-- /.row -->
        </div>

      </div>
    </div>
  </div>

</section>
<?php
$content = ob_get_clean();
include '../layout/layout.php';
?>