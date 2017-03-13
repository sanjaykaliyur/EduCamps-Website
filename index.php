<?php
include 'header.php';
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
    <style>
    .imgs {

    top: 0;
    left: 0;
    min-width: 80%;
    height: 500px;
    max-width: none;
  }
    </style>

</head>

    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill">
                  <center><img class="imgs" src="Images/home-banner.png" ></img></center>
                </div>
                <div class="carousel-caption">
                </div>
            </div>
            <div class="item">
                <div class="fill">
                  <center><img class="imgs" src="Images/stanford.jpg"></img></div></center>
                <div class="carousel-caption">
                </div>
            </div>
            <div class="item">
              <div class="fill">
                <center><img class="imgs" src="Images/camp2.png"></img></div></center>
              <div class="carousel-caption">
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Welcome to EduCamps!
                </h1>
                <p>
                EduCamps run the highest quality educational camps for children in the United States. Our mission is to educate and enhance the knowledge of all our campers. Former members of our camp have gone on to excel in their school classes and attend some of the most presitigous universities in the world.</p>
                <br>
                <p>Our camps are run by a group of highly skilled professionals in the fields of science and technology. We have come together to offer camps for young children to inspire them to pursue their interests. We offer a range of camps from athletics to programming.
                </p>
            </div>
            <hr>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-check"></i> Sign up for Camp</h4>
                    </div>
                    <div class="panel-body">
                        <p>View all of our camps and activities and sign up your child for camp. Registration is now OPEN!</p>
                        <a href="register2.php" class="btn btn-default">Register Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-gift"></i> Visit our Shop</h4>
                    </div>
                    <div class="panel-body">
                        <p>Pick up some sweet EduCamps swag and proudly show your passion for science and technology.</p>
                        <a href="catalog2.php" class="btn btn-default">Catalog</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-compass"></i> Read What People Have to Say</h4>
                    </div>
                    <div class="panel-body">
                        <p>See what former campers and their parents have to say about our camps.</p>
                        <a href="forum.php" class="btn btn-default">Reviews</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Section -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">See what our kids have built!</h2>
            </div>
            <div class="col-md-4 col-sm-6">
                    <img class="img-responsive img-portfolio img-hover" src="Images/tesla.jpg" style="height:250px;width:700px;">
            </div>
            <div class="col-md-4 col-sm-6">
                    <img class="img-responsive img-portfolio img-hover" src="Images/rocket.jpg" style="height:250px;width:700px;">
            </div>
            <div class="col-md-4 col-sm-6">
                    <img class="img-responsive img-portfolio img-hover" src="Images/engine.jpg" style="height:250px;width:700px;">
            </div>
            <div class="col-md-4 col-sm-6">
                    <img class="img-responsive img-portfolio img-hover" src="Images/iss.jpg" style="height:250px;width:700px;">
            </div>
            <div class="col-md-4 col-sm-6">
                    <img class="img-responsive img-portfolio img-hover" src="Images/rocket1.png" style="height:250px;width:700px;">
            </div>
            <div class="col-md-4 col-sm-6">
                    <img class="img-responsive img-portfolio img-hover" src="Images/truck.jpg" style="height:250px;width:700px;">
            </div>
        </div>
        <!-- /.row -->
        <hr>

        <!-- Map -->
        <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/d/embed?mid=1tISWrBW8ZcQj_T-FSu1nsBw_jLU" width="640" height="480"></iframe>

        <!-- Camp Locations -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Camp Locations</h2>
            </div>
            <div class="col-md-6">
                <p></p>
                <ul>
                  <li>Santa Clara, CA (500 El Camino Real, Santa Clara, CA 95053)</li>
                  <li>Los Angeles, CA (245 N Beverly Dr, Beverly Hills, CA 90210)</li>
                  <li>Austin, TX (110 Inner Campus Dr, Austin, TX 78705)</li>
                  <li>Boulder, CO (2055 Regent Dr, Boulder, CO 80309)</li>
                  <li>Boston, MA (86 Brattle Street, Cambrdge, MA 02138)</li>
                  <li>Seattle, WA (1410 NE Campus Parkway, Seattle, WA 98195)</li>
                  <li>Chicago, IL (5801 S Ellis Ave, Chicago, IL 60637)</li>
                  <li>Miami, FL (1320 S Dixie Hwy, Coral Gables, FL 33146)</li>
                  <li>Atlanta, GA (353 Ferst Dr, Atlanta, GA 30332)</li>
                </ul>
            </div>
        </div>


        <!-- Features Section -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Important Camp Information</h2>
            </div>
            <div class="col-md-6">
                <p>Our camps:</p>
                <ul>
                    <li>Begin June 19, 2017 and run through August 18, 2017</li>
                    <li>Are available in several states across the United States</li>
                    <li>Are appropriate for children between the ages of 8-14</li>
                    <li>Are available for children of all skill levels</li>
                </ul>
                <p>To find out more details on our specific camps, visit our <a href="register.php">Registration</a> page.</p>
            </div>
            <div class="col-md-6">
                <img class="img-responsive" src="Images/Coen161project-logo-empty.png" style="height=150%;width=200%;">
            </div>
        </div>

        <!-- /.row -->
        <hr>

        <!-- Call to Action Section -->
        <div class="well">
            <div class="row">
                <div class="col-md-8">
                    <p>Have questions? Want someone to talk to? Our award-winning operators are always available to answer any and all questions you have about our camps. Your satisfaction is our top priority.</p>
                </div>
                <div class="col-md-4">
                    <a class="btn btn-lg btn-default btn-block" href="contact.php">Contact Us!</a>
                </div>
            </div>
        </div>

        <hr>

    </div>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>
</html>

<?php
include 'footer.php';
?>
