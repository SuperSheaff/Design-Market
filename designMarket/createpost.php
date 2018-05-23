<?php 
	session_start();
	$con = mysqli_connect("localhost", "admin", "password", "design_market");

	$user = $_SESSION["username"];
	$name = mysqli_real_escape_string($con, $_POST["name"]);
	$description = mysqli_real_escape_string($con, $_POST["description"]);
	$category = mysqli_real_escape_string($con, $_POST["category"]);

	$source = "./uploads/" . basename($_FILES["uploadInspiration"]["name"]);
	$error = 1;
	if ($_FILES["uploadInspiration"]["size"] > 100000) {
	    $error = 3;
	}
	if (file_exists($source)) {
	    $error = 2;
	}
	if ($error == 1) {
		move_uploaded_file($_FILES["uploadInspiration"]["tmp_name"], $source);
	}

	$inspiration = $source;
	$min = mysqli_real_escape_string($con, $_POST["minSum"]);
	$max = mysqli_real_escape_string($con, $_POST["maxSum"]);
	$budget = mysqli_real_escape_string($con, $_POST["budgetType"]);
	$privacy = mysqli_real_escape_string($con, $_POST["privacyType"]);

	$sql = "INSERT INTO posts (posted_by, name, description, category, inspiration, min_budget, max_budget, budget_type, privacy) VALUES ('$user', '$name', '$description', '$category', '$inspiration', '$min', '$max', '$budget', '$privacy')";
	$con->query($sql);
?>
<script>
	window.location.replace("./marketplace.php");
</script>