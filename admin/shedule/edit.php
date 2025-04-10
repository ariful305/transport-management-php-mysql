<?php
$title = "Bus Edit";
ob_start();
include ("../../db/admin/shedule.php");
include ("../../db/admin/bus.php");
include ("../../db/admin/route.php");

$bus= all_active_bus();
$route= all_route();
$data = get_shedule_by_id($_GET['id']);
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
                                                <label for="status">Bus Number</label>                                               
                                                <select name="bus_id" id="" class="form-control" required>
                                                    <option value="">Select Bus</option>
                                                    <?php foreach($bus as $b){ ?>
                                                        <option value="<?php echo $b['id']; ?>" <?php echo ($b['id'] == $data['bus_id']) ? 'selected' : ''; ?>><?php echo $b['bus_number']; ?></option>
                                                    <?php } ?>

                                                </select>
                                </div>
                                <div class="form-group">
                                                <label for="status">Route Name</label>                                               
                                                <select name="route_id" id="" class="form-control" required>
                                                    <option value="">Select Route</option>
                                                    <?php foreach($route as $r){ ?>
                                                        <option value="<?php echo $r['id']; ?>" <?php echo ($r['id'] == $data['route_id']) ? 'selected' : ''; ?>><?php echo $r['route_name']; ?></option>
                                                    <?php } ?>
                                                    </select>
                                    </div>
                                     <div class="form-group">
                                                <label for="status">Departure Time</label>                                               
                                                <input type="time" class="form-control" name="departure_time" value="<?php echo  $data['departure_time']?>" required>
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