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
	<h2><a href="view_blog.php">View Blogs</a></h2>
	<h2><a href="insert_blog.php">Add Blog</a></h2>
	
</div> 
<table width="1000" border="3" align="center" bgcolor="pink">
<tr>
	<td colspan="8" align="center" bgcolor="white"><h1>View All Blog Posts</h1></td>
</tr>

<tr bgcolor="orange">
	<th>blog No</th>
	<th>blog Date</th>
	<th>blog Author</th>
	<th>blog Title</th>
	<th>blog Image</th>
	<th>blog Content</th>
	<th>Delete blog</th>
	<th>Edit blog</th>
</tr> 

<?php 
include("includes/connect.php");
$query = "select * from blog order by 1 DESC";
$run = mysqli_query($con,$query);
while ($row=mysqli_fetch_array($run)) {
	# code...
	$blog_id =$row['blog_id'];
	$blog_date =$row['blog_date'];
	$blog_author =$row['blog_author'];
	$blog_title =$row['blog_title'];
	$blog_image =$row['blog_image'];
	$blog_content =substr($row['blog_content'],0,50);
	

?>

<tr align="center" > 
	<td><?php echo $blog_id; ?></td>
	<td><?php echo $blog_date; ?></td>
	<td><?php echo $blog_author; ?></td>
	<td><?php echo $blog_title; ?></td>
	<td><img src="../images2/uploads/<?php echo $blog_image; ?>"width="80" height="80" </td>
	<td><?php echo $blog_content; ?></td>
	<td><a href="deleteblog.php?dele=<?php echo $blog_id; ?>">Delete</a></td>
	
	
</tr> 
<?php } ?>
	
</table>

</body>
</html>