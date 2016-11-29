<?php
include("includes/connect.php");

if (isset($_GET['dele'])) {
	# code...
	$delete_id = $_GET['dele'];
	$delete_query ="delete from blog where blog_id='$delete_id' ";

	if (mysqli_query($con,$delete_query)) {
		# code..
		echo "<script> alert('Blog has been Deleted') </script>";
		echo 
		"<script> window.open('view_blog.php','_self') </script>";
	}

}
?>