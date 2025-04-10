<?php

include ($_SERVER['DOCUMENT_ROOT'] ."/db/db.php");

//index function
function all_route()
{
    global $conn;    
    $query = "SELECT *  FROM routes";
    $result = mysqli_query($conn, $query);   
    return $result;
}

//create function
function create_route($data){
    global $conn;
    $query = "INSERT INTO routes (route_name, start_point, end_point, distance, amount) VALUES ('".$data['route_name']."', '".$data['start_point']."', '".$data['end_point']."', '".$data['distance']."', '".$data['amount']."')";
    $result = mysqli_query($conn, $query);
    if($result){
        return true;
    }else{
        return false;
    }
}

//show function
function get_route_by_id($id){
    global $conn;
    $query = "SELECT * FROM routes WHERE id = $id";
    $result = mysqli_query($conn, $query);
    return mysqli_fetch_assoc($result);
}

//update function
function route_update($id, $data){
    global $conn;
    $query = "UPDATE routes SET route_name = '".$data['route_name']."', start_point = '".$data['start_point']."', end_point = '".$data['end_point']."', distance = '".$data['distance']."', amount = '".$data['amount']."' WHERE id = $id";
    $result = mysqli_query($conn, $query);
    if($result){
        return true;
    }else{
        return false;
    }

}

//delete function
function delete_route($id){
    global $conn;
    $query = "DELETE FROM routes WHERE id = $id";
    $result = mysqli_query($conn, $query);
    return $result;
}

?>