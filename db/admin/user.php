<?php

include ($_SERVER['DOCUMENT_ROOT'] ."/db/db.php");

//index function
function all_user()
{
    global $conn;    
    $query = "SELECT *  FROM users where role = 'admin'";
    $result = mysqli_query($conn, $query);   
    return $result;
}


//create function
function create_user($data){
    global $conn;
        
    $query = "INSERT INTO users (username, email, password, role,status) VALUES ('".$data['username']."', '".$data['email']."', '".md5($data['password'])."', 'admin','".$data['status']."' )";
    $result = mysqli_query($conn, $query);
    if($result){
        return true;
    }else{
        return false;
    }
}

//show function
function get_user_by_id($id){
    global $conn;
    $query = "SELECT * FROM users WHERE id = $id";
    $result = mysqli_query($conn, $query);
    return mysqli_fetch_assoc($result);
}

//update function
function update_user($data){
    global $conn;
    $query = "UPDATE users SET username = '".$data['username']."', email = '".$data['email']."', status = '".$data['status']."' WHERE id = {$data['id']}";
    $result = mysqli_query($conn, $query);
    if($result){
        return true;
    }else{
        return false;
    }

}

//delete function
function delete_user($id){
    global $conn;
    $query = "DELETE FROM users WHERE id = $id";
    $result = mysqli_query($conn, $query);
    return $result;
}

?>