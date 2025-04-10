<?php
include ($_SERVER['DOCUMENT_ROOT'] . "/db/db.php");

//index function
function all_shedule()
{
    global $conn;    
    $query = "SELECT   
    sh.id,
    sh.route_id,
    sh.bus_id,
    sh.departure_time,                      
    r.route_name,
    b.bus_number,   
    b.capacity,
    b.driver_name
FROM shedule_buses sh
JOIN buses b ON sh.bus_id = b.id
JOIN routes r ON sh.route_id = r.id
ORDER BY sh.departure_time DESC";

    $result = mysqli_query($conn, $query);   
   // Check if query was successful
   if ($result === false) {
    error_log("Query failed: " . mysqli_error($conn));
    return [];
    }

    // Convert result to array
    $shedule = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $shedule[] = $row;
    }

return $shedule;
}

function search_shedule($id="NULL")
{
    global $conn;    
    $query = "SELECT   
    sh.id,
    sh.route_id,
    sh.bus_id,
    sh.departure_time,                      
    r.route_name,
    b.bus_number,   
    b.capacity
    FROM shedule_buses sh
    JOIN buses b ON sh.bus_id = b.id
    JOIN routes r ON sh.route_id = r.id
    WHERE sh.route_id = $id
    ORDER BY sh.departure_time DESC";

    $result = mysqli_query($conn, $query);   
   // Check if query was successful
   if ($result === false) {
    error_log("Query failed: " . mysqli_error($conn));
    return [];
    }

    // Convert result to array
    $shedule = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $shedule[] = $row;
    }
    return $shedule;
}

//create function
function create_shedule($data){
    global $conn;
    $query = "INSERT INTO shedule_buses (route_id, bus_id, departure_time) VALUES ('".$data['route_id']."', '".$data['bus_id']."', '".$data['departure_time']."')";
    $result = mysqli_query($conn, $query);
    if($result){
        return true;
    }else{
        return false;
    }
}

//show function
function get_shedule_by_id($id){
    global $conn;
    $query = "SELECT * FROM shedule_buses WHERE id = $id";
    $result = mysqli_query($conn, $query);
    return mysqli_fetch_assoc($result);
}

//update function
function shedule_update($id, $data){
    global $conn;
    $query = "UPDATE shedule_buses SET route_id = '".$data['route_id']."', bus_id = '".$data['bus_id']."', departure_time = '".$data['departure_time']."' WHERE id = $id";
    $result = mysqli_query($conn, $query);
    if($result){
        return true;
    }else{
        return false;
    }

}

//delete function
function delete_shedule($id){
    global $conn;
    $query = "DELETE FROM shedule_buses WHERE id = $id";
    $result = mysqli_query($conn, $query);
    return $result;
}

?>