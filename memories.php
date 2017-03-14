<?php include 'header.php' ?>
<!DOCTYPE html>

<?php

// make a note of the current working directory relative to root.
$directory_self = str_replace(basename($_SERVER['PHP_SELF']), '', $_SERVER['PHP_SELF']);

// make a note of the location of the upload handler script
$uploadHandler = 'http://' . $_SERVER['HTTP_HOST'] . $directory_self . 'upload.processor.php';

// set a max file size for the html upload form
$max_file_size = 3000000; // size in bytes

// now echo the html page
?>
<html lang="en">
<head>
  <meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
  <!-- Bootstrap Core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="css/modern-business.css" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <style>
  #uploadImg {
    text-align: center;
  }
  #fileToUpload {
    margin: auto;
  }
  .carousel img {
  position: absolute;
  top: 0;
  left: 0;
  min-width: 100%;
  height: 500px;
  max-width: none;
}
  </style>

</head>
<body>
  <br><br><br><br><br>
  <?php
  $sql = "SELECT image FROM userPics;";
  $result = mysqli_query($conn,$sql);
  $numRows = mysqli_num_rows($result);
  $i = 0;
    echo'
    <header id="myCarousel" class="carousel slide">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>';
        while($i < $numRows) {
          echo'
          <li data-target="#myCarousel" data-slide-to="'.$i.'"></li>
          ';
          $i++;
        }
          echo '
        </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
            ';
        echo '<div class="item active">
                  <div class="fill">
                    <center><img class="logo" src="Images/coen161logo.png" style="padding-left: 120px;"></img></center>
                  </div>
                  <div class="carousel-caption">
                  </div>
              </div>';
            while($row = mysqli_fetch_assoc($result)) {
              echo'
              <div class="item">
                <div class="fill">
                  <center><img class="camp1" src="'.$row['image'].'"></img></div></center>
                <div class="carousel-caption">
                </div>
              </div>';
            }
          echo '</div>';
            echo '
            <!-- Controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="icon-prev"></span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="icon-next"></span>
            </a>
    </header>
          ';
          ?>
  <div id = "uploadImg">
    <body>
      <?php
        if(isset($_SESSION['id'])) {
        $sql2 = "SELECT COUNT(*) FROM userPics WHERE Username = 'neil';";
        $result2 = mysqli_query($conn,$sql2);
        $row2 = mysqli_fetch_assoc($result2);
        if($row2['COUNT(*)'] == 10)
        {
          echo "<h3>You have uploaded the max amount of 10 pictures!</h3>";
        }
        else { echo '
          <form id="Upload" action="upload.php" enctype="multipart/form-data" method="post">
            <h4>
                Upload up to 10 memories!
            </h4>

            <p>
                <input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $max_file_size ?>">
            </p>
            <p>
                <label for="file">Select your image (.JPG & .PNG only)</label>
                <input type="file" name="fileToUpload" id="fileToUpload" required data-validation-required-message="No Photo Attached!">
            <p>
                <input type="submit" value="Upload Image" name="submit">
            </p>
          </form>';
        }
      }
    ?>
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

<?php include 'footer.php' ?>
