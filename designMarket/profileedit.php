<?
	$con = mysqli_connect("localhost", "admin", "password", "design_market");
	$id = $_SESSION['id'];
	mysqli_real_escape_string($con, $_POST['description']);

	$source = "./uploads/" . basename($_FILES["uploadProfilePicture"]["name"]);
	$error = 1;
	if ($_FILES["uploadProfilePicture"]["size"] > 100000) {
	    $error = 3;
	}
	if (file_exists($source)) {
	    $error = 2;
	}
	if ($error == 1) {
		move_uploaded_file($_FILES["uploadProfilePicture"]["tmp_name"], $source);
	}

	$sql = "UPDATE users SET description='$description', image='$source'";
?>

<script>
    window.location.replace("home.php")
</script>
