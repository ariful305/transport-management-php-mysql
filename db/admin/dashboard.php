<?php

include ($_SERVER['DOCUMENT_ROOT'] ."/db/db.php");

function count_all(){
    global $conn;
    global $conn;
    $total_student = "SELECT count(*) FROM transport_applications";
    $total_bus = "SELECT count(*) FROM buses";
    $total_route = "SELECT count(*) FROM routes";
    $total_earn = "SELECT sum(paid_amount) FROM transport_applications";
    $result_student = mysqli_query($conn, $total_student);
    $result_bus = mysqli_query($conn, $total_bus);
    $result_route = mysqli_query($conn, $total_route);
    $result_earn = mysqli_query($conn, $total_earn);   
    $total_student = mysqli_fetch_array($result_student);
    $total_bus = mysqli_fetch_array($result_bus);
    $total_route = mysqli_fetch_array($result_route);
    $total_earn = mysqli_fetch_array($result_earn);
    return array($total_student, $total_bus, $total_route, $total_earn); 
    
}

function all_students(){
    global $conn;
    $today = date('Y-m-d');
    $sql = "SELECT 
            ta.id AS application_id,
            ta.student_id,
            p.first_name,
            p.last_name,
            p.image,
            p.department,
            r.route_name,
            r.amount,
            ta.application_status,
            ta.payment_method,
            ta.paid_amount,
            ta.created_at
        FROM transport_applications ta
        JOIN users u ON ta.student_id = u.id
        JOIN profiles p ON u.id = p.user_id
        JOIN routes r ON ta.route_id = r.id
        WHERE DATE(ta.created_at) = '$today'
        ORDER BY ta.id DESC 
        LIMIT 5";
    $result = mysqli_query($conn, $sql);
    return $result;
}
