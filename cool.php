<?php
 session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
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

