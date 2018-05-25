<?php 
	
    $con = mysqli_connect("localhost", "admin", "password", "design_market");

	$postid = mysqli_real_escape_string($con, $_GET["postid"]);
	$userid = mysqli_real_escape_string($con, $_GET["userid"]);
	$sql="UPDATE posts SET awarded_to='$userid' WHERE id='$postid'";
	$con->query($sql);
?>
<script>
	window.location.replace("home.php");
</script>