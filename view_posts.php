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
	<h2><a href="logout.php">Logout</a></h2>
	<h2><a href="view_posts.php">View Posts</a></h2>
	<h2><a href="insert_post.php">Add Post</a></h2>
	
</div> 
<table width="1000" border="3" align="center" bgcolor="pink">
<tr>
	<td colspan="8" align="center" bgcolor="white"><h1>View All Posts</h1></td>
</tr>

<tr bgcolor="orange">
	<th>Post No</th>
	<th>Post Date</th>
	<th>Post Author</th>
	<th>Post Title</th>
	<th>Post Image</th>
	<th>Post Content</th>
	<th>Delete Post</th>
	
</tr> 

<?php 
include("includes/connect.php");
$query = "select * from posts order by 1 DESC";
$run = mysqli_query($con,$query);
while ($row=mysqli_fetch_array($run)) {
	# code...
	$post_id =$row['post_id'];
	$post_date =$row['post_date'];
	$post_author =$row['post_author'];
	$post_title =$row['post_title'];
	$post_image =$row['post_image'];
	$post_content =substr($row['post_content'],0,50);
	

?>

<tr align="center" > 
	<td><?php echo $post_id; ?></td>
	<td><?php echo $post_date; ?></td>
	<td><?php echo $post_author; ?></td>
	<td><?php echo $post_title; ?></td>
	<td><img src="../images2/uploads/<?php echo $post_image; ?>"width="80" height="80" </td>
	<td><?php echo $post_content; ?></td>
	<td><a href="delete.php?del=<?php echo $post_id; ?>">Delete</a></td>
	
	
</tr> 
<?php } ?>
	
</table>

</body>
</html>