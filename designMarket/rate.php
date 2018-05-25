<?php 
	
    $con = mysqli_connect("localhost", "admin", "password", "design_market");

	$postid = mysqli_real_escape_string($con, $_POST["postid"]);

	
	$sql = "UPDATE userportfolio SET rating='$rating' WHERE postid='$postid'";
	$con->query($sql);
?>
<script>
	window.location.replace("home.php");
</script>