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
 <script
src="https://code.jquery.com/jquery-3.1.1.js"
integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="
crossorigin="anonymous"></script>
 <script>
   var week1 = '<option selected="selected" value=""> Dates </option><option value="06/19/17 - 06/26/17">06/19/17 - 06/26/17</option><option value="06/26/17 - 07/03/17">06/26/17 - 07/03/17</option><option value="07/03/17 - 07/10/17">07/03/17 - 07/10/17</option><option value="07/10/17 - 07/17/17">07/10/17 - 07/17/17</option><option value="07/17/17 - 07/24/17">07/17/17 - 07/24/17</option><option value="07/24/17 - 07/31/17">07/24/17 - 07/31/17</option><option value="07/31/17 - 08/07/17">07/31/17 - 08/07/17</option><option value="08/07/17 - 08/14/17">08/07/17 - 08/14/17</option><option value="08/14/17 - 08/18/17">08/14/17 - 08/18/17</option>';
   var week2 = '<option selected="selected" value=""> Dates </option><option value="06/19/17 - 07/03/17">06/19/17 - 07/03/17</option><option value="07/03/17 - 07/17/17 ">   07/03/17 - 07/17/17 </option><option value="07/17/17 - 07/31/17">07/17/17 - 07/31/17</option><option value="07/31/17 - 08/14/17">07/31/17 - 08/14/17</option>';
  $(document).ready(function(){
    $("select#select_1").on('change',function(){
        if($(this).val()=="1 week"){
            $("select#select_2").html(week1);
        }else if($(this).val()=="2 weeks"){
            $("select#select_2").html(week2);
        }
    });
  });
 </script>
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
                   <center><a>
                       <img class="img-responsive img-hover" src="http://static.kinfosystem.com/images/slider/web-program.png" style="height:300px;widht:400px;" alt="">
                   </a></center>
               </div>
                <form method="post" action="added_to_cart.php">
                <div class="col-md-6">
                      <h3 name="course">'.$row['course_name'].'</h3>
                      <p>'.$row['description'].'</p>
                      <p>'.$row['date'].'</p>
                      <p class = "sameLine">Cost: $<p class = "sameLine" name = "cost">'.$row['cost'].' (one week)</p></p>
                      <p class = "sameLine">Spots remaining: <p class = "sameLine" name = "spots"><b>'.$row['spots'].'</b></p></p>
                      <input type="hidden" name="spots" value="'.$row['spots'].'"></input>
                      <input type="hidden" name="cost" value="'.$row['cost'].'"></input>
                      <input type="hidden" name="courseName" value="'.$row['course_name'].'"></input>
                      <input type="hidden" name="courseID" value="'.$row['course_ID'].'"></input>
                      <p>Locations:
                           <ul>
                             <li>San Jose, CA</li>
                             <li>Seattle, WA</li>
                             <li>Austin, TX</li>
                      </p>
                      <div id="dates" style="float: right;">
                        <select name = "duration" id="select_1" required data-validation-required-message="select a duration">
                          <option selected="selected" value="">Duration</option>
                          <option value="1 week">1 week</option>
                          <option value="2 weeks">2 weeks</option>
                        </select>
                        <br>
                        <select name = "date" id="select_2" required data-validation-required-message="select a date">
                          <option selected="selected" value="">Dates</option>
                        </select>
                      </div>';
                      if($row['spots'] != 0)
                        echo '<button class="btn btn-primary" type="submit">Add to Cart<i class="fa fa-angle-right"></i></button>';
                      else {
                        echo '<p><b>Course is full!</b></p>';
                      }
              echo'</div>
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
