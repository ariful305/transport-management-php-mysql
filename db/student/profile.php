<?php

include ($_SERVER['DOCUMENT_ROOT'] ."/db/db.php");

function getStudentProfile($student_id){
    global $conn;
    $sql = "SELECT * FROM profiles 
                JOIN users ON profiles.user_id = users.id
                WHERE user_id = '$student_id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    return $row;
}

function update_profile($data, $files) {
    global $conn;
    
    // Add debugging
    error_log("Profile update requested for user ID: " . $data['user_id']);
    
    // Extract data from the form
    $id = isset($data['id']) ? $data['id'] : null;
    $user_id = $data['user_id'];
    $first_name = mysqli_real_escape_string($conn, $data['first_name']);
    $last_name = mysqli_real_escape_string($conn, $data['last_name']);
    $student_id = mysqli_real_escape_string($conn, $data['student_id']);
    $department = mysqli_real_escape_string($conn, $data['department']);
    $phone_number = mysqli_real_escape_string($conn, $data['phone_number']);
    $address = mysqli_real_escape_string($conn, $data['address']);
    $city = mysqli_real_escape_string($conn, $data['city']);
    $state = mysqli_real_escape_string($conn, $data['state']);
    $postal_code = mysqli_real_escape_string($conn, $data['postal_code']);
    
    // Log form data for debugging
    error_log("Form data: " . print_r($data, true));
    
    // Handle image upload
    $image_path = null;
    if(isset($files['image']) && $files['image']['error'] == 0) {
        $target_dir = $_SERVER['DOCUMENT_ROOT'] . "/student/uploads/";
        error_log("Upload directory: " . $target_dir);
        
        // Make sure directory exists
        if (!is_dir($target_dir)) {
            mkdir($target_dir, 0777, true);
            error_log("Created directory: " . $target_dir);
        }
        
        $file_extension = pathinfo($files['image']['name'], PATHINFO_EXTENSION);
        $new_filename = 'profile_' . $user_id . '_' . time() . '.' . $file_extension;
        $target_file = $target_dir . $new_filename;
        error_log("Target file: " . $target_file);
        
        if(move_uploaded_file($files['image']['tmp_name'], $target_file)) {
            $image_path = "uploads/" . $new_filename;
            error_log("File uploaded successfully: " . $image_path);
        } else {
            error_log("Failed to upload file. Error: " . $files['image']['error']);
        }
    } else if(isset($files['image'])) {
        error_log("File upload error code: " . $files['image']['error']);
    }
       
    // Check if profile exists or needs to be created
    if ($id) {
        // Update existing profile
        $update_profile = "UPDATE profiles SET 
            first_name = '$first_name',
            last_name = '$last_name',
            student_id = '$student_id',
            department = '$department',
            phone_number = '$phone_number',
            address = '$address',
            city = '$city',
            state = '$state',
            postal_code = '$postal_code'";
            
        // Add image to query if uploaded
        if($image_path) {
            $update_profile .= ", image = '$image_path'";
        }
        
        $update_profile .= " WHERE user_id = $id";
       
        $result_profile = mysqli_query($conn, $update_profile);
     
        if (!$result_profile) {
            error_log("Update query failed: " . mysqli_error($conn));
            return false;
        } else {
            error_log("Profile updated successfully. Rows affected: " . mysqli_affected_rows($conn));
            if (mysqli_affected_rows($conn) == 0) {
                error_log("Warning: No rows were updated. ID might be incorrect.");
            }
        }
    } else {
        // Create new profile
        $image_to_use = $image_path ?: 'NULL';
        
        $insert_profile = "INSERT INTO profiles (
            user_id, first_name, last_name, student_id, 
            department, phone_number, address, city, 
            state, postal_code, image, created_at
        ) VALUES (
            $user_id, '$first_name', '$last_name', '$student_id',
            '$department', '$phone_number', '$address', '$city',
            '$state', '$postal_code', '$image_to_use', NOW()
        )";
        
        error_log("Insert SQL: " . $insert_profile);
        $result_profile = mysqli_query($conn, $insert_profile);
        
        if (!$result_profile) {
            error_log("Insert query failed: " . mysqli_error($conn));
            return false;
        } else {
            error_log("New profile created. ID: " . mysqli_insert_id($conn));
        }
    }
    
    return true;
}
