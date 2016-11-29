<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Admin Area</title>

    <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />    
    <!-- full calendar css-->
    <link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
	<link href="assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
    <!-- easy pie chart-->
    <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <!-- owl carousel -->
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
	<link href="css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <!-- Custom styles -->
	<link rel="stylesheet" href="css/fullcalendar.css">
	<link href="css/widgets.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
	<link href="css/xcharts.min.css" rel=" stylesheet">	
	<link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->
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