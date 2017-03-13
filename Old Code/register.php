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
 include 'header.php'
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
 <body>

   <div class="container">

     <div class="row">
         <div class="col-lg-12">
             <h1 class="page-header">Courses
                 <small>EduCamps Programs</small>
             </h1>
         </div>
     </div>
     <!-- /.row -->

     <!-- Blog Post Row -->
     <div class="row">
         <div class="col-md-5">
                 <img class="img-responsive img-hover" src="Images/CatalogPictures/ballEDU.png" style="height:300px;widht:400px;" alt="">
         </div>
         <div class="col-md-6">
             <h3>Introduction to Web Programming</h3>
             <p>This camp covers basic HTML, CSS, and Javascript.</p>
             <p>June 19, 2017 - July 7, 2017</p>
             <p>Cost: $499</p>
             <p>Spots remaining: 50</p>
             <p>Locations:
                  <ul>
                    <li>San Jose, CA</li>
                    <li>Seattle, WA</li>
                    <li>Austin, TX</li>
             </p>
             <a class="btn btn-primary" href="blog-post.html">Add to Cart <i class="fa fa-angle-right"></i></a>
         </div>
     </div>
     <!-- /.row -->

     <hr>

     <!-- Blog Post Row -->
     <div class="row">
         <div class="col-md-5">
             <a href="blog-post.html">
                 <img class="img-responsive img-hover" src="http://placehold.it/600x300" alt="">
             </a>
         </div>
         <div class="col-md-6">
             <h3>Introduction to Python</h3>
             <p>This camp covers all the basic elements of Python.</p>
             <p>July 10, 2017 - July 28, 2017</p>
             <p>Cost: $499</p>
             <p>Spots remaining: 50</p>
             <p>Locations:
                  <ul>
                    <li>San Jose, CA</li>
                    <li>Seattle, WA</li>
                    <li>Austin, TX</li>
             </p>
             <a class="btn btn-primary" href="blog-post.html">Add to Cart <i class="fa fa-angle-right"></i></a>
         </div>
     </div>
     <!-- /.row -->

     <hr>

     <!-- Blog Post Row -->
     <div class="row">
         <div class="col-md-5">
             <a href="blog-post.html">
                 <img class="img-responsive img-hover" src="http://placehold.it/600x300" alt="">
             </a>
         </div>
         <div class="col-md-6">
             <h3>Introduction to Java</h3>
             <p>This camp covers all the basic elements of Java.</p>
             <p>July 31, 2017 - August 18, 2017</p>
             <p>Cost: $499</p>
             <p>Spots remaining: 50</p>
             <p>Locations:
                  <ul>
                    <li>San Jose, CA</li>
                    <li>Seattle, WA</li>
                    <li>Austin, TX</li>
             </p>
             <a class="btn btn-primary" href="blog-post.html">Add to Cart <i class="fa fa-angle-right"></i></a>
         </div>
     </div>
     <hr>

     <!-- Blog Post Row -->
     <div class="row">
         <div class="col-md-5">
             <a href="blog-post.html">
                 <img class="img-responsive img-hover" src="http://placehold.it/600x300" alt="">
             </a>
         </div>
         <div class="col-md-6">
             <h3>Physics</h3>
             <p>This introductory physics camp covers all the basics of Mechanics and includes laboratory work. Safety equipment included in price.</p>
             <p>June 19, 2017 - July 7, 2017</p>
             <p>Cost: $699</p>
             <p>Spots remaining: 50</p>
             <p>Locations:
                  <ul>
                    <li>San Jose, CA</li>
                    <li>Seattle, WA</li>
                    <li>Austin, TX</li>
             </p>
             <a class="btn btn-primary" href="blog-post.html">Add to Cart <i class="fa fa-angle-right"></i></a>
         </div>
     </div>
     <hr>

     <!-- Blog Post Row -->
     <div class="row">
         <div class="col-md-5">
             <a href="blog-post.html">
                 <img class="img-responsive img-hover" src="http://placehold.it/600x300" alt="">
             </a>
         </div>
         <div class="col-md-6">
             <h3>Chemistry</h3>
             <p>This introductory chemistry camp covers all the basics of chemistry and includes laboratory work. Safety equipment included in price.</p>
             <p>July 10, 2017 - July 28, 2017</p>
             <p>Cost: $699</p>
             <p>Spots remaining: 50</p>
             <p>Locations:
                  <ul>
                    <li>San Jose, CA</li>
                    <li>Seattle, WA</li>
                    <li>Austin, TX</li>
             </p>
             <a class="btn btn-primary" href="blog-post.html">Add to Cart <i class="fa fa-angle-right"></i></a>
         </div>
     </div>
     <hr>

     <!-- Blog Post Row -->
     <div class="row">
         <div class="col-md-5">
             <a href="blog-post.html">
                 <img class="img-responsive img-hover" src="http://placehold.it/600x300" alt="">
             </a>
         </div>
         <div class="col-md-6">
             <h3>Biology</h3>
             <p>This introductory biology camp covers all the basics of the biological world and includes laboratory work. Safety equipment included in price.</p>
             <p>July 31, 2017 - August 18, 2017</p>
             <p>Cost: $699</p>
             <p>Spots remaining: 50</p>
             <p>Locations:
                  <ul>
                    <li>San Jose, CA</li>
                    <li>Seattle, WA</li>
                    <li>Austin, TX</li>
             </p>
             <a class="btn btn-primary" href="blog-post.html">Add to Cart <i class="fa fa-angle-right"></i></a>
         </div>
     </div>
     <hr>

     <!-- Blog Post Row -->
     <div class="row">
         <div class="col-md-5">
             <a href="blog-post.html">
                 <img class="img-responsive img-hover" src="http://placehold.it/600x300" alt="">
             </a>
         </div>
         <div class="col-md-6">
             <h3>Geometry</h3>
             <p>This introductory geometry camp covers all the material covered in high school geometry courses.</p>
             <p>June 19, 2017 - July 7, 2017</p>
             <p>Cost: $499</p>
             <p>Spots remaining: 50</p>
             <p>Locations:
                  <ul>
                    <li>San Jose, CA</li>
                    <li>Seattle, WA</li>
                    <li>Austin, TX</li>
             </p>
             <a class="btn btn-primary" href="blog-post.html">Add to Cart <i class="fa fa-angle-right"></i></a>
         </div>
     </div>
     <hr>

     <!-- Blog Post Row -->
     <div class="row">
         <div class="col-md-5">
             <a href="blog-post.html">
                 <img class="img-responsive img-hover" src="http://placehold.it/600x300" alt="">
             </a>
         </div>
         <div class="col-md-6">
             <h3>Algebra</h3>
             <p>This introductory algebra camp covers all the material covered in high school Algebra 1 and Algebra 2 courses.</p>
             <p>July 10, 2017 - July 28, 2017</p>
             <p>Cost: $499</p>
             <p>Spots remaining: 50</p>
             <p>Locations:
                  <ul>
                    <li>San Jose, CA</li>
                    <li>Seattle, WA</li>
                    <li>Austin, TX</li>
             </p>
             <a class="btn btn-primary" href="blog-post.html">Add to Cart <i class="fa fa-angle-right"></i></a>
         </div>
     </div>
     <hr>

     <div class="row">
         <div class="col-md-5">
             <a href="blog-post.html">
                 <img class="img-responsive img-hover" src="http://placehold.it/600x300" alt="">
             </a>
         </div>
         <div class="col-md-6">
             <h3>Calculus</h3>
             <p>This introductory calculus camp covers all the material covered in a standard high school Calculus AB course.</p>
             <p>July 31, 2017 - August 18, 2017</p>
             <p>Cost: $499</p>
             <p>Spots remaining: 50</p>
             <p>Locations:
                  <ul>
                    <li>San Jose, CA</li>
                    <li>Seattle, WA</li>
                    <li>Austin, TX</li>
             </p>
             <a class="btn btn-primary" href="blog-post.html">Add to Cart <i class="fa fa-angle-right"></i></a>
         </div>
     </div>
     <hr>

     <div class="row">
         <div class="col-md-5">
             <a href="blog-post.html">
                 <img class="img-responsive img-hover" src="http://placehold.it/600x300" alt="">
             </a>
         </div>
         <div class="col-md-6">
             <h3>Swimming</h3>
             <p>Swimming camp. Available for swimmers of all levels.</p>
             <p>June 19, 2017 - August 18, 2017</p>
             <p>Cost: $499</p>
             <p>Spots remaining: 50</p>
             <p>Locations:
                  <ul>
                    <li>San Jose, CA</li>
                    <li>Seattle, WA</li>
                    <li>Austin, TX</li>
             </p>
             <a class="btn btn-primary" href="blog-post.html">Add to Cart <i class="fa fa-angle-right"></i></a>
         </div>
     </div>
     <hr>

     <div class="row">
         <div class="col-md-5">
             <a href="blog-post.html">
                 <img class="img-responsive img-hover" src="http://placehold.it/600x300" alt="">
             </a>
         </div>
         <div class="col-md-6">
             <h3>Basketball</h3>
             <p>Basketball camp. Open to campers of all levels.</p>
             <p>June 19, 2017 - August 18, 2017</p>
             <p>Cost: $499</p>
             <p>Spots remaining: 50</p>
             <p>Locations:
                  <ul>
                    <li>San Jose, CA</li>
                    <li>Seattle, WA</li>
                    <li>Austin, TX</li>
             </p>
             <a class="btn btn-primary" href="blog-post.html">Add to Cart <i class="fa fa-angle-right"></i></a>
         </div>
     </div>
    </div>
    <hr>




   <!-- jQuery -->
   <script src="js/jquery.js"></script>

   <!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>

 </body>
 </html>
 <?php
 include 'footer.php'
 ?>
