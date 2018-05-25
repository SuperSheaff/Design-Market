<?php 
    $con = mysqli_connect("localhost", "admin", "password", "design_market");

	$postid = mysqli_real_escape_string($con, $_GET["postid"]);
	$userid = mysqli_real_escape_string($con, $_GET["userid"]);
	$sql="DELETE FROM bids WHERE postid='$postid' && userid='$userid'";
	$con->query($sql);
?>
<script>
	window.location.replace("home.php");
</script>