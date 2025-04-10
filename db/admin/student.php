<?php

include ($_SERVER['DOCUMENT_ROOT'] ."/db/db.php");

function all_student()
{
    global $conn; // Use the global $conn variable
    $query = "SELECT 
            ta.id AS application_id,
            ta.student_id,
            u.username,
            u.email,
            u.role,
            p.first_name,
            p.last_name,
            p.image,
            p.department,
            p.phone_number,
            p.address,
            p.city,
            p.state,
            p.postal_code,
            r.route_name,
            r.start_point,
            r.end_point,
            r.distance,
            r.amount,
            ta.application_status,
            ta.payment_method,
            ta.paid_amount,
            ta.created_at
        FROM transport_applications ta
        JOIN users u ON ta.student_id = u.id
        JOIN profiles p ON u.id = p.user_id
        JOIN routes r ON ta.route_id = r.id
        order by ta.id desc";  

    
    $result = mysqli_query($conn, $query);
    
    // Check if query was successful
    if ($result === false) {
        error_log("Query failed: " . mysqli_error($conn));
        return [];
    }
    
    // Convert result to array
    $students = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $students[] = $row;
    }
    
    return $students;
}

function get_student($id)
{
    global $conn;
    $query = "SELECT 
            ta.id AS application_id,
            ta.student_id,
            u.username,
            u.email,
            u.role,
            p.first_name,
            p.last_name,
            p.image,
            p.department,
            p.phone_number,
            p.address,
            p.city,
            p.state,
            p.postal_code,
            r.route_name,
            r.start_point,
            r.end_point,
            r.distance,
            r.amount,
            ta.application_status,
            ta.payment_method,
            ta.paid_amount,
            ta.created_at
        FROM transport_applications ta
        JOIN users u ON ta.student_id = u.id
        JOIN profiles p ON u.id = p.user_id
        JOIN routes r ON ta.route_id = r.id
        WHERE ta.id = $id";
    
    $result = mysqli_query($conn, $query);
    
    // Check if query was successful
    if ($result === false) {
        error_log("Query failed: " . mysqli_error($conn));
        return null;
    }
    
    // Convert result to array
    $student = mysqli_fetch_assoc($result);
    
    return $student;
}

function status_update($id, $status){
    global $conn;
    $query = "UPDATE transport_applications SET application_status = '$status' WHERE id = $id";
    $result = mysqli_query($conn, $query);
    
    // Check if query was successful
    if ($result === false) {
        error_log("Query failed: " . mysqli_error($conn));
        return false;
    }
    
    return true;
}
function delete_student($id)
{
    global $conn;
     $query = "DELETE FROM transport_applications WHERE id = $id";
    $result = mysqli_query($conn, $query);

    
    // Check if query was successful
    if ($result === false) {
        error_log("Query failed: " . mysqli_error($conn));
        return false;
    }
    
    return true;
}
?>