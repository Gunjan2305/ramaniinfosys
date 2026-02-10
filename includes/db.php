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
    $password = "Srushti@02";
}

// Enable error reporting for mysqli to throw exceptions (default in PHP 8+)
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Set charset to utf8mb4
    $conn->set_charset("utf8mb4");

} catch (mysqli_sql_exception $e) {
    // Check if running on localhost to show detailed errors
    if ($is_localhost) {
        die("Connection failed: " . $e->getMessage());
    } else {
        // On live server, log the error and show a generic message
        // For debugging purposes right now, uncomment the next line to see the real error on live
        die("Connection failed: " . $e->getMessage());

        // Once fixed, revert to:
        // error_log("Database connection failed: " . $e->getMessage());
        // die("Service temporarily unavailable. Please check database credentials.");
    }
}
?>