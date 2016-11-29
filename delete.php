<?php
include("includes/connect.php");

if (isset($_GET['del'])) {
	# code...
	$delete_id = $_GET['del'];
	$delete_query ="delete from posts where post_id='$delete_id' ";

	if (mysqli_query($con,$delete_query)) {
		# code..
		echo "<script> alert('post has been Deleted') </script>";
		echo 
		"<script> window.open('view_posts.php','_self') </script>";
	}

}
?>