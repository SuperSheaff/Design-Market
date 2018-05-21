<?php
    session_start();
	$con = mysqli_connect("localhost", "admin", "password", "design_market");

	$name = mysqli_real_escape_string($con, $_POST['name']);
	$username = mysqli_real_escape_string($con, $_POST['username']);
	$password = mysqli_real_escape_string($con, $_POST['password']);
	$email = mysqli_real_escape_string($con, $_POST['email']);

	$hash = password_hash($password, PASSWORD_DEFAULT);

	$sql = "INSERT INTO users (username, email, hash, name) 
	VALUES ('$username', '$email', '$hash', '$name')";
	$con->query($sql);

	//$message = "Thanks for signing up to Design Market";
	//$headers = "From: lachpaulsen@gmail.com";
	//mail($email, "Welcome to Design Market", $message, $headers);
?>
<script>
	window.location.replace("./home.php");
</script>