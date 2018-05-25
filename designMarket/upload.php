<?php 
	
    $con = mysqli_connect("localhost", "admin", "password", "design_market");

	$postid = mysqli_real_escape_string($con, $_POST["postid"]);
	$userid = mysqli_real_escape_string($con, $_POST["userid"]);

	$source = "./images/" . basename($_FILES["uploadJob"]["name"]);
	$error = 1;
	if ($_FILES["uploadJob"]["size"] > 100000) {
	    $error = 3;
	}
	if (file_exists($source)) {
	    $error = 2;
	}
	if ($error == 1) {
		move_uploaded_file($_FILES["uploadJob"]["tmp_name"], $source);
	}
	$sql = "INSERT INTO userportfolio (userid, postid, image) VALUES ('$userid', '$postid', '$source')";
	$con->query($sql);
?>
<script>
	window.location.replace("home.php");
</script>