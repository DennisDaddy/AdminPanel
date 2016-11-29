<!DOCTYPE html>
<html>
<head>
	<title>Insert Blogpost</title>
	<script src="//tinymce.cachefly.net/4.0/tinymce.min.js"></script>
<script>
    tinymce.init({selector:'textarea'});

</script
</head>
<body>
<form method="post" action="insert_blog.php" enctype="multipart/form-data">
	<table  width="600" align="center" border="3">
	<tr>
		<td align="center" bgcolor="white" colspan="6"><h1>Insert New Blog Post Here</h1></td>
	</tr>

	<tr>
		<td align="right">Blog Title</td>
		<td><input type="text" name="title" size="30"></td>
	</tr>

	<tr>
		<td align="right">Blog Author</td>
		<td><input type="text" name="author" size="30"></td>
	</tr>

	<tr>
		<td align="right">Blog Keywords</td>
		<td><input type="text" name="keywords" size="30"></td>
	</tr>

	<tr>
		<td align="right">Blog Image</td>
		<td><input type="file" name="image"></td>
	</tr>
	<tr>
		<td align="right">Blog Content</td>
		<td><textarea name="content" cols="30" rows="15"></textarea></td>
	</tr>

	<tr>
		
		<td align="center" colspan="6"><input type="submit" name="submit" value="Publish Now"></td>
	</tr>

	


	
		
	</table>
</form>

</body>
</html>
<?php
include("includes/connect.php");

if (isset($_POST['submit'])) {
	# code...
	 $blog_title =$_POST['title'];
	 $blog_date =date('y-m-d');
	 $blog_author =$_POST['author'];
	 $blog_keywords =$_POST['keywords'];
	 $blog_content =$_POST['content'];
	 $blog_image =$_FILES['image']['name'];
	  $image_tmp =$_FILES['image']['tmp_name'];

	 if ($blog_title=='' or $blog_keywords=='' or $blog_content=='' or $blog_author=='') {
	 	# code...
	 	echo "<script>alert('any of the fields is empty')</script";
	 	exit();
	 }

	 else{
	 	move_uploaded_file($image_tmp,"../images2/uploads/$blog_image");
	 	$insert_query ="insert into blog(blog_title,blog_date,blog_author,blog_image,blog_keywords,blog_content) values('$blog_title','$blog_date','$blog_author','$blog_image','$blog_keywords','$blog_content')";  
	 	if (mysqli_query($con,$insert_query)) {
	 		# code...
	 		echo "<script> alert('post Published successfuly!')</script>";
	 		echo "<script> window.open('view_blog.php','_self')</script>";
	 	}
	 }
}

?>