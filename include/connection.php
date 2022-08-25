<?php
$servername="localhost";
$username = "root";
$password = "";
$dbname = "attendancesystem";

// Create Connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check Connection
if($conn->connect_error) {
	die("connection failed: ". $conn->connect_error);
}
