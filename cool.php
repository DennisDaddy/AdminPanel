<?php
 session_start();

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Admin Login</title>

    <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>

</body>
</html>

<?php
include("includes/connect.php");
if (isset($_POST['login'])) {
    # code...
    $user_name=$_POST['user_name'];
    $user_pass=$_POST['user_pass'];

    $admin_query ="select * from admin_login where user_name='$user_name' AND user_pass='$user_pass'";

    $run =mysqli_query($con,$admin_query);
    if (mysqli_num_rows($run)>0) {
        # code...
        $_SESSION['user_name'] =$user_name;

        echo "<script>window.open('index.php','_self')</script>";
    }
    else{

        echo "<script>alert('username or password incorrect!')</script>";
    }
}

