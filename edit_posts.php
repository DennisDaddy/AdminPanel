<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
	<link rel="stylesheet" type="text/css" href="admin_style.css" />
</head>
<body>
<div id="header">
<a href="index.php"><h1>Welcome to the Admin Panel</h1></a>

</div>

<div id="sidebar">
	<h2><a href="#">Logout</a></h2>
	<h2><a href="view_posts.php">View Posts</a></h2>
	<h2><a href="#">Insert New Posts</a></h2>
	<h2><a href="#">View Comments</a></h2>
</div> 

<?php
include("includes/connect.php");

if (isset($_GET['edit'])) {
	# code...
	$edit_id = $_GET['edit'];
	$edit_query ="select * from Posts where post_id='$edit_id'";

	$run_edit = mysqli_query($con,$edit_query);

	while($edit_row =mysqli_fetch_array($run_edit)) {
		# code...
		$post_id =$edit_row['post_id'];
		$post_title =$edit_row['post_title'];
		$post_author =$edit_row['post_author'];
		$post_keywords =$edit_row['post_keywords'];
		$post_image =$edit_row['post_image'];
		$post_content =$edit_row['post_content'];


}
}
?>

<form method="post" action="edit_posts.php?edit_form=<?php echo $post_id; ?>" enctype="multipart/form-data">
	<table  width="1080" align="center" border="10" bgcolor="yellow">
	<tr>
		<td align="center" bgcolor="yellow" colspan="6"><h1>Edit The  Post Here</h1></td>
	</tr>

	<tr>
		<td align="right">Post Title</td>
		<td><input type="text" name="post_title" size="30"value="<?php echo $post_title; ?>"></td>
	</tr> 

	<tr>
		<td align="right">Post Author</td>
		<td><input type="text" name="author" size="30" value="<?php echo $post_author; ?>"></td>
	</tr>

	<tr>
		<td align="right">Post Keywords</td>
		<td><input type="text" name="keywords" size="30" value="<?php echo $post_keywords; ?>"></td>
	</tr>

	<tr>
		<td align="right">Post Image</td>
		
		<td>
		<input type="file" name="image">
		<img src="../images/uploads//<?php echo $post_image; ?>" width="100" height="100"></td>
	</tr>
	<tr>
		<td align="right">Post Content</td>
		<td><textarea name="content" cols="30" rows="15"> <?php echo $post_content; ?></textarea></td>
	</tr>

	<tr>
		
		<td align="center" colspan="6"><input type="submit" name="submit" value="Update Now"></td>
	</tr>


	
		
	</table>
</form>
  
</body>
</html>
 

