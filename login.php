
<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Admin Login | Usama Mukwaya</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/us.jpg">
</head><!--/head-->
<body>
    <header class="navbar navbar-inverse navbar-fixed-top midnight-blue" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><h1 style="color: #D4AF37; font-family: cursive;" >Usama Mukwaya</h1></a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="../index.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                    <li><a href="../filmology.php"><i class="fa fa-film" aria-hidden="true"></i> Filmology</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i> Osam <i class="icon-angle-down"></i></a>
                        <ul class="dropdown-menu">
                           <li><a href="../osam.php"><i class="fa fa-user" aria-hidden="true"></i> Osam</a></li>
                           <li><a href="../news.php"><i class="fa fa-newspaper-o" aria-hidden="true"></i> News</a></li>
                           <li><a href="../gallery.php"><i class="fa fa-picture-o" aria-hidden="true"></i> Gallery</a></li>
                           <li><a href="../awards.php"><i class="fa fa-gift" aria-hidden="true"></i> Awards</a></li>
                        </ul>
                    </li>
                    <li><a href="../blog.php"><i class="fa fa-pencil" aria-hidden="true"></i> Blog</a></li> 
                    <li><a href="../community.php"><i class="fa fa-users" aria-hidden="true"></i> Community</a></li> 
                    <li><a href="../contact.php"><i class="fa fa-phone" aria-hidden="true"></i> Contact</a></li>
                </ul>
            </div>
        </div>
    </header><!--/header-->

    <section id="title" class="emerald">
        <div class="container">
            <div class="row">
                
                
            </div>
        </div>
    </section><!--/#title-->     

    <section id="registration" class="container">
     <h1 align="center">Admin Login Area</h1>
        <form  class="center" role="form" action="login.php" method="post" >
            <fieldset class="registration-form">
                <div class="form-group">
                    <input type="text" id="username" name="user_name" placeholder="Username" class="form-control">
                </div>
                
                <div class="form-group">
                    <input type="password" id="password" name="user_pass" placeholder="Password" class="form-control">
                </div>
                
                <div class="form-group">
                    <button name="login" class="btn btn-success btn-md btn-block">Login</button>
                </div>
            </fieldset>
        </form>
    </section><!--/#registration-->

    <section id="bottom" class="wet-asphalt">
        <div class="container">
          
            </div>
        </div>
    </section><!--/#bottom-->

    
    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                     <p style="color: #D4AF37;">&copy; <?php echo date("Y"); ?> | Usam Mukwaya |  All Rights Reserved.</p>
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                       <li><a href="https://www.facebook.com/OnlineUsama"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
                        <li><a href="https://twitter.com/usamamukwaya"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="https://www.youtube.com/user/TheUgmovies"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                        <li><a href="https://plus.google.com/+UsamaMukwaya"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        <li><a id="gototop" class="gototop" href="#"><i class="icon-chevron-up"></i></a></li><!--#gototop-->
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->
    <script src="https://use.fontawesome.com/4d0c79038f.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
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


?>