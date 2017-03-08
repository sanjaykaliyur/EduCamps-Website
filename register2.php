<?php
/* Allows parents to register their children for camp
   Child's full name

   Date of birth

   Parents' name

   Parents' contact info and phone

   Grade level and school

   Special instructions (allergies, etc)

   Camp duration (1 or 2 weeks)

   Fee (automatically calculated based on duration ^)

   Payment information (payment by credit card)

   Confirmation should be display upon successful registration

   Page also creates an account based on the account information taken in (requires database)
 */
 include 'header.php';
 include 'connect.php';
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
   <br>
 	 <br>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <style>
 .sameLine {
   display: inline;
 }
 </style>
 <body>
   <div class="container">
     <div class="row">
         <div class="col-lg-12">
             <h1 class="page-header">Camps
                 <small>EduCamps Programs</small>
             </h1>
         </div>
     </div>
     <?php
     $sql = "SELECT * FROM COURSES;";
     $result = mysqli_query($conn,$sql);
     $counter = 0;
//'.$counter.'
     while($row = mysqli_fetch_assoc($result)) {
       echo ' <div class="row">
                <div class="col-md-5">
                    <a href="blog-post.html">
                        <img class="img-responsive img-hover" src="http://placehold.it/600x300" alt="">
                    </a>
                </div>
                <form method="post" action="added_to_cart.php">
                <div class="col-md-6">
                      <h3 name="course">'.$row['course_name'].'</h3>
                      <p>'.$row['description'].'</p>
                      <p>'.$row['date'].'</p>
                      <p class = "sameLine">Cost: $<p class = "sameLine" name = "cost">'.$row['cost'].'</p></p>
                      <p class = "sameLine">Spots remaining: <p class = "sameLine" name = "spots">'.$row['spots'].'</p></p>
                      <input type="hidden" name="spots" value="'.$row['spots'].'"></input>
                      <input type="hidden" name="cost" value="'.$row['cost'].'"></input>
                      <input type="hidden" name="course" value="'.$row['course_name'].'"></input>
                      <input type="hidden" name="courseID" value="'.$row['course_ID'].'"></input>
                      <p>Locations:
                           <ul>
                             <li>San Jose, CA</li>
                             <li>Seattle, WA</li>
                             <li>Austin, TX</li>
                      </p>
                    <button class="btn btn-primary" type="submit">Add to Cart<i class="fa fa-angle-right"></i></button>
                </div>
              </form>
            </div>
            <hr>';
            $counter++;
     }
     ?>
   <!-- jQuery -->
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
   <script src="js/main.js"></script>

   <!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>

 </body>
 </html>
 <?php
 include 'footer.php'
 ?>
