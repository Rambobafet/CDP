<?php
$servername = "lesconteiidb.mysql.db";
$username = "lesconteiidb";
$password = "C0nt3us3s";
$dbname = "lesconteiidb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully";
?>