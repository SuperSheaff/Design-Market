<?
	$con = mysqli_connect("localhost", "admin", "password", "design_market");
	$id = $_SESSION['id'];
	mysqli_real_escape_string($con, $_POST['name']);
    mysqli_real_escape_string($con, $_POST['description']);
    mysqli_real_escape_string($con, $_POST['uploadInspiration']);
    mysqli_real_escape_string($con, $_POST['minSum']);
    mysqli_real_escape_string($con, $_POST['maxSum']);
    mysqli_real_escape_string($con, $_POST['budgetType']);

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

	$sql = "UPDATE posts SET name='$name', description='$description', image='$source', min_budget='$minSum', max_budget='$maxSum', budget_type='budgetType";
?>
