<?php
//Verify session
session_start();
  if(isset($_SESSION['id'])) {
    $id = $_SESSION['id'];
  }
  include 'connect.php';
?>
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>EduCamps</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div id="userCntrl" style="float:right;">
              <?php
                if(isset($_SESSION['id'])){
                  $sql = "select * FROM USERS WHERE `Username` ='$id'";
                  $result = mysqli_query($conn,$sql);
                  $row = mysqli_fetch_assoc($result);
                  echo '<div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Welcome '.$row['Username'].'</button>
                        <ul class="dropdown-menu">
                          <li><a href="myAccount.php">My Account</a></li>
                          <li><a href="added_to_cart.php">Cart</a></li>
                          <li><a href="logout.php">Logout</a></li>
                        </ul>
                      </div>';
                }
                else
                {
                  echo '<button><a href="login.php">Sign-In</a></button>';
                }
               ?>
            </div>
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">
                  <img class="logo" src="Images/Coen161project-logo-empty.png"style="height:500%; width:30%; padding-bottom: 20px;"></img>
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="register2.php">Registration</a></li>
                    <li><a href="catalog2.php">Catalog</a></li>
                    <li><a href="forum.php">Reviews</a></li>
                    <li><a href="memories.php">Memories</a></li>
                    <li><a href="visualization.php">Visualization</a></li>
                    <li><a href="activity.php">Activity</a></li>
                    <li><a href="faq.php">FAQ</a></li>
                    <li><a href="contact.php">Contact</a></li>
                  </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

</head>
