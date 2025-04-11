<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "transport_management";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully<br>";
} else {
    echo "Error creating database: " . $conn->error;
}

// Select the database
$conn->select_db($dbname);

// Create users table
$sql = "CREATE TABLE IF NOT EXISTS users (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    role ENUM('admin', 'student') NOT NULL,
    status ENUM('pending', 'approved', 'rejected') DEFAULT 'pending',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Users table created successfully<br>";
} else {
    echo "Error creating users table: " . $conn->error;
}

// Create profile table
$sql = "CREATE TABLE IF NOT EXISTS profiles (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    student_id VARCHAR(20) NOT NULL UNIQUE,
    first_name VARCHAR(50),
    last_name VARCHAR(50) NULL,
    image varchar(255),
    department varchar(255),
    phone_number VARCHAR(20),
    address TEXT,
    city VARCHAR(50),
    state VARCHAR(50),
    postal_code VARCHAR(20),
    user_id INT(6) UNSIGNED,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
)";

if ($conn->query($sql) === TRUE) {
    echo "Profiles table created successfully<br>";
} else {
    echo "Error creating profiles table: " . $conn->error;
}

// Create routes table
$sql = "CREATE TABLE IF NOT EXISTS routes (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    route_name VARCHAR(100) NOT NULL,
    start_point VARCHAR(100) NOT NULL,
    end_point VARCHAR(100) NOT NULL,
    distance DECIMAL(10,2),
    amount DECIMAL(10,2),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Routes table created successfully<br>";
} else {
    echo "Error creating routes table: " . $conn->error;
}

// Create buses table
$sql = "CREATE TABLE IF NOT EXISTS buses (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    bus_number VARCHAR(20) NOT NULL UNIQUE,
    capacity INT(3) NOT NULL,
    driver_name VARCHAR(255),
    driver_phone VARCHAR(255),
    status ENUM('active', 'maintenance', 'inactive') DEFAULT 'active',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (route_id) REFERENCES routes(id) ON DELETE SET NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Buses table created successfully<br>";
} else {
    echo "Error creating buses table: " . $conn->error;
}

// Create transport_applications table
$sql = "CREATE TABLE IF NOT EXISTS transport_applications (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    student_id INT(6) UNSIGNED NOT NULL,
    route_id INT(6) UNSIGNED NOT NULL,
    application_status ENUM('pending', 'approved', 'rejected') DEFAULT 'pending',
    payment_method ENUM('cash', 'bkash', 'rocket') DEFAULT 'cash',
    paid_amount DECIMAL(10,2),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (student_id) REFERENCES users(id) ON DELETE CASCADE,
    FOREIGN KEY (route_id) REFERENCES routes(id) ON DELETE CASCADE
)";

if ($conn->query($sql) === TRUE) {
    echo "Transport applications table created successfully<br>";
} else {
    echo "Error creating transport applications table: " . $conn->error;
}

//shedule bus table
$sql = "CREATE TABLE IF NOT EXISTS shedule_buses (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    route_id INT(6) UNSIGNED NOT NULL,
    bus_id INT(6) UNSIGNED NOT NULL,
    departure_time TIME,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (route_id) REFERENCES routes(id) ON DELETE CASCADE,
    FOREIGN KEY (bus_id) REFERENCES buses(id) ON DELETE CASCADE
)";

if ($conn->query($sql) === TRUE) {
    echo "Bus shedule table created successfully<br>";
} else {
    echo "Error creating Bus shedule table: " . $conn->error;
}

// Create admin user (default admin)
$adminUsername = "admin";
$adminPassword = md5("123456789");
$adminEmail = "admin@gmail.com";

$sql = "INSERT IGNORE INTO users (username, password, email , role, status) 
        VALUES ('$adminUsername', '$adminPassword', '$adminEmail', 'admin', 'approved')";

if ($conn->query($sql) === TRUE) {
    echo "Default admin user created successfully<br>";
} else {
    echo "Error creating default admin user: " . $conn->error;
}

$conn->close();
echo "Database setup completed successfully!";
?>
