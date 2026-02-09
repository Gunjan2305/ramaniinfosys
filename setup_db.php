<?php
$servername = "localhost";
$username = "root";
$password = ""; // Default XAMPP password

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE IF NOT EXISTS ramani_infosys_db";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully<br>";
} else {
    die("Error creating database: " . $conn->error);
}

// Select database
$conn->select_db("ramani_infosys_db");

// SQL to create contacts table
$sql_contacts = "CREATE TABLE IF NOT EXISTS contacts (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    website VARCHAR(255),
    requirement VARCHAR(255) NOT NULL,
    message TEXT NOT NULL,
    submission_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

if ($conn->query($sql_contacts) === TRUE) {
    echo "Table 'contacts' created successfully<br>";
} else {
    echo "Error creating table 'contacts': " . $conn->error . "<br>";
}

// SQL to create audit_requests table
$sql_audit = "CREATE TABLE IF NOT EXISTS audit_requests (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    website VARCHAR(255),
    challenges TEXT,
    submission_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

if ($conn->query($sql_audit) === TRUE) {
    echo "Table 'audit_requests' created successfully<br>";
} else {
    echo "Error creating table 'audit_requests': " . $conn->error . "<br>";
}

// Create admin user table
$sql_admin = "CREATE TABLE IF NOT EXISTS admin_users (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
)";

if ($conn->query($sql_admin) === TRUE) {
    echo "Table 'admin_users' created successfully<br>";

    // Insert default admin user if not exists
    // Default: admin / admin123
    $check_admin = "SELECT * FROM admin_users WHERE username = 'admin'";
    $result = $conn->query($check_admin);

    if ($result->num_rows == 0) {
        $password_hash = password_hash("admin123", PASSWORD_DEFAULT);
        $sql_insert_admin = "INSERT INTO admin_users (username, password) VALUES ('admin', '$password_hash')";
        if ($conn->query($sql_insert_admin) === TRUE) {
            echo "Default admin user created (User: admin, Pass: admin123)<br>";
        } else {
            echo "Error inserting admin user: " . $conn->error . "<br>";
        }
    }
} else {
    echo "Error creating table 'admin_users': " . $conn->error . "<br>";
}

$conn->close();
?>