<?php
session_start();
include ($_SERVER['DOCUMENT_ROOT'] ."/db/db.php");

function null_any_colum()  {
    global $conn;

    $sql = "SELECT count(*) FROM profiles WHERE user_id = " . $_SESSION['user_id'] ."";
    $sql1 = "SELECT * FROM profiles WHERE user_id = " . $_SESSION['user_id'] . " AND 
            (first_name IS NULL OR first_name IS NULL OR image IS NULL OR department IS NULL OR phone_number IS NULL OR address IS NULL  OR city IS NULL OR state IS NULL OR postal_code IS NULL OR image IS NULL)";    
    $query = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($query);
    $query1 = mysqli_query($conn, $sql1);
    $row1 = mysqli_fetch_array($query1);    
    
    switch (true) {
        case $row[0] == 0:
            return 1;
        case $row1 == 0:
            return 0;
        default:
            return 1;
    }
}

function check_reg() {
    global $conn;
    $sql = "SELECT * FROM transport_applications WHERE student_id = ". $_SESSION['user_id']."";
    $query = mysqli_query($conn, $sql);    

    if(mysqli_num_rows($query) > 0) {
        $row = mysqli_fetch_assoc($query);
        $query1 = $sql = "SELECT *  FROM routes  
                                     JOIN transport_applications ON routes.id = transport_applications.route_id
                                    WHERE routes.id = " . $row['route_id'];                                    
        $result = mysqli_query($conn, $query1);   
        $row1 = mysqli_fetch_assoc($result);
        return $row1;
    } else {
        return false;
    }
}

 function apply_transport($data){
    global $conn;
    $sql = "INSERT INTO transport_applications (student_id, route_id, application_status,payment_method,paid_amount) VALUES ('".$data['student_id']."', '".$data['route_id']."','".$data['application_status']."','".$data['payment_method']."','".$data['paid_amount']."')";
    $query = mysqli_query($conn, $sql);
    if($query) {
        return true;
    } else {
        return false;
    }
}