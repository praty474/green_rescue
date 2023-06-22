<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gr_db";

// Create a new mysqli instance
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>