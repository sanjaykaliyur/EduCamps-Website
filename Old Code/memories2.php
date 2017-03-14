<?php include 'header.php' ?>
<!DOCTYPE html>

<?php

// make a note of the current working directory relative to root.
$directory_self = str_replace(basename($_SERVER['PHP_SELF']), '', $_SERVER['PHP_SELF']);

// make a note of the location of the upload handler script
$uploadHandler = 'http://' . $_SERVER['HTTP_HOST'] . $directory_self . 'upload.processor.php';

// set a max file size for the html upload form
$max_file_size = 30000; // size in bytes

// now echo the html page
?>
<html lang="en">
<head>
<!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill">
                  <center><img src="Images/iss.jpg" style="height: 100%;"></img></center>
                </div>
                <div class="carousel-caption">
                </div>
            </div>
            <div class="item">
                <div class="fill">
                  <center><img src="Images/rocket.jpg" style="height: 100%;"></img></div></center>
                <div class="carousel-caption">
                </div>
            </div>
            <div class="item">
              <div class="fill">
                <center><img src="Images/tesla.jpg" style="height: 100%;"></img></div></center>
              <div class="carousel-caption">
                </div>
            </div>
			<div class="item">
              <div class="fill">
                <center><img src="Images/truck.jpg" style="height: 100%;"></img></div></center>
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
</head>
<body>

<!--<<<<<<< HEAD-->
    <head>
        <meta http-equiv="content-type" content="text/html; charset=iso-8859-1">

        <link rel="stylesheet" type="text/css" href="stylesheet.css">

        <title>Upload form</title>

    </head>

    <body>
    <?php
    if(isset($_SESSION['id'])) {
      echo '
      <form id="Upload" action="<?php echo $uploadHandler ?>" enctype="multipart/form-data" method="post">

          <h1>
              Upload Picture
          </h1>

          <p>
              <input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $max_file_size ?>">
          </p>

          <p>
              <label for="file">Select your image (.JPG & .PNG only)</label>
              <input id="file" type="file" name="file">
          </p>


          <p>
              <input id="submit" type="submit" name="submit" value="Upload">
          </p>

      </form>';
    }
?>

    </body>

</html>

<!--=======
</body>
>>>>>>> origin/version2-->
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

<?php include 'footer.php' ?>
