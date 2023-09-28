<?php
// Database configuration
$dbHost = 'localhost'; // Change to your MySQL host if different
$dbUsername = 'root'; // Change to your MySQL username
$dbPassword = ''; // Change to your MySQL password if set
$dbName = 'login'; // Change to the name of your database

// Create a database connection
$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>
