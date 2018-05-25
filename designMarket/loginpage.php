<?php
    session_start();
	$con = mysqli_connect("localhost", "admin", "password", "design_market");
	$user = mysqli_real_escape_string($con, $_POST['username']);
	$sql = "SELECT * FROM users WHERE username = '$user'";
	$result=$con->query($sql);
	$array = $result->fetch_assoc();
	if (password_verify($_POST['password'], $array['hash'])) {
		$_SESSION['username'] = $array['username'];
		$_SESSION['password'] = $array['hash'];
?>
<script>
	window.location.replace("./home.php");
</script>
<?php
	} else {
		echo "Login failed";
	}
?>
<script>
	window.location.replace("./login.php");
</script>
