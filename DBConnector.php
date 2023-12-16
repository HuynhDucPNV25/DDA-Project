<?php
// Database configuration
$host = 'localhost'; // Your database server
$username = 'root'; // Your database username
$password = 'mysql'; // Your database password
$database = 'userdata'; // Your database name

// Create a connection
$connection = new mysqli($host, $username, $password, $database);

// Check the connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

echo "Connected successfully";

$connection->close();
?>