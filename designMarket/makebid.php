<?php 
    $con = mysqli_connect("localhost", "admin", "password", "design_market");

	$comment = mysqli_real_escape_string($con, $_POST['description']);
	$bid = mysqli_real_escape_string($con, $_POST['maxsum']);
	$postid = mysqli_real_escape_string($con, $_POST['postid']);
	$userid = mysqli_real_escape_string($con, $_POST['userid']);

	$sql= "INSERT INTO bids (postid, userid, bid, comment) VALUES ('$postid', '$userid', '$bid', '$comment')";
	$con->query($sql);
?>	