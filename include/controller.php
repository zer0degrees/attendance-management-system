<?php
session_start();
require 'connection.php';
date_default_timezone_set("Africa/Nairobi");
$date=date("Y-m-d h:s:sa");
$date_time =date("Y-m-d h:i:sa");
$_SESSION['last_time'] = time();

$usernameErr = $passwordErr = "";
$username= $password = "";

function clean($data) 
{
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);	
	return $data;
}

if($_SERVER["REQUEST_METHOD"] == "post") {
	if (empty($_POST["username"])){
		$usernameErr = "Username is required.";
	} else {
		$username = clean($_POST["username"]);
	}
	
	if (empty($_POST["password"])) {
		$passwordErr = "Password is required"; 
	} else {
		$password = clean($_POST["password"]);
	}
}

// Login Query
if(isset($_POST['login'])){
	$user_type = $_POST['user_type'];

	if($user_type == "admin"){
		
		$sql = "SELECT * FROM admin WHERE username = '$username'"; 

		$result = $conn->query($sql);

		if($result->num_rows >0) {
			// Output data of each row
			while($row = $result->fetch_assoc()) {
				if($row['password'] == $password) {
					$_SESSION['user_name'] = $row['fname'] ." ". $row['lname'];
					$_SESSION['user_type'] =$user_type;

					header("location: ..admin/index.php");
				} else {
					$passwordErr = '<div class="alert alert-danger"><strong>Password Not Found.</strong></div>';
					$username = $row['username']; 
				}
			}
		} else{
			$usernameErr = '<div class="alert alert-danger"><strong><Username </strong>Not Found.</div>';
			$username = "";
		}
	}
}
?>