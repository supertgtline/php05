<?php
$servername = "localhost";
$username = "root";
$password = "none";
$dbname   = "danang_info";

// Create connection
$dbcon = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($dbcon->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>