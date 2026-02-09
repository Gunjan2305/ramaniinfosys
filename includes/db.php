<?php
// Check if running on localhost
$is_localhost = check_if_localhost();

function check_if_localhost()
{
    $whitelist = array(
        '127.0.0.1',
        '::1',
        'localhost'
    );
    return in_array($_SERVER['REMOTE_ADDR'], $whitelist) ||
        (isset($_SERVER['HTTP_HOST']) && ($_SERVER['HTTP_HOST'] == 'localhost' || strpos($_SERVER['HTTP_HOST'], '127.0.0.1') !== false));
}

if ($is_localhost) {
    // Local Database Configuration (XAMPP Default)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ramani_infosys_db";
} else {
    // Live Database Configuration (Hostinger/cPanel)
    $servername = "localhost";
    $username = "u214631115_ramani_infosys";
    $dbname = "u214631115_ramani_infosys";
    // TODO: Please replace 'YOUR_LIVE_DATABASE_PASSWORD' with your actual live database password
    $password = "YOUR_LIVE_DATABASE_PASSWORD";
}

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    // Detailed error only on localhost for debugging
    if ($is_localhost) {
        die("Connection failed: " . $conn->connect_error);
    } else {
        // Generic error on live site for security
        error_log("Database connection failed: " . $conn->connect_error);
        die("Service temporarily unavailable via database connection.");
    }
}

// Set charset to utf8mb4 for proper character handling
$conn->set_charset("utf8mb4");
?>