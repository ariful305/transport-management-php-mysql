<?php

include ($_SERVER['DOCUMENT_ROOT'] ."/db/db.php");

//index function
function all_bus()
{
    global $conn;    
    $query = "SELECT *  FROM buses";
    $result = mysqli_query($conn, $query);   
    return $result;
}
function all_active_bus()
{
    global $conn;    
    $query = "SELECT *  FROM buses where status = 'active'";
    $result = mysqli_query($conn, $query);   
    return $result;
}

//create function
function create_bus($data){
    global $conn;
    $query = "INSERT INTO buses (bus_number, capacity, driver_name, driver_phone, status) VALUES ('".$data['bus_number']."', '".$data['capacity']."', '".$data['driver_name']."', '".$data['driver_phone']."', '".$data['status']."')";
    $result = mysqli_query($conn, $query);
    if($result){
        return true;
    }else{
        return false;
    }
}

//show function
function get_bus_by_id($id){
    global $conn;
    $query = "SELECT * FROM buses WHERE id = $id";
    $result = mysqli_query($conn, $query);
    return mysqli_fetch_assoc($result);
}

//update function
function bus_update($id, $data){
    global $conn;
    $query = "UPDATE buses SET bus_number = '".$data['bus_number']."', capacity = '".$data['capacity']."', driver_name = '".$data['driver_name']."', driver_phone = '".$data['driver_phone']."', status = '".$data['status']."' WHERE id = $id";
    $result = mysqli_query($conn, $query);
    if($result){
        return true;
    }else{
        return false;
    }

}

//delete function
function delete_bus($id){
    global $conn;
    $query = "DELETE FROM buses WHERE id = $id";
    $result = mysqli_query($conn, $query);
    return $result;
}

?>