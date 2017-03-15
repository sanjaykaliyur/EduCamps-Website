<?php
/* Catalog

   List of camp-related items
      Shirt
      Water Bottle
      Other things

   Students signed up for camp get 15% discount (requires checking for login)
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
  .sameLine {display: inline;}
 </style>
 <body>
 <!-- Page Content -->
 <div class="container">
   <br>
   <br>

     <div class="row">
         <div class="col-lg-12">
             <h1 >Catalog
                 <small>Purchase EduCamps Gear</small>
             </h1>
             <p>*Note: If you have registered or are registering your child for camp, you will receive a 15% discount on all merchandise purchased in this catalaog (Discount applied during checkout)</p>
         </div>
     </div>
     <!-- /.row -->
     <?php
     $sql = "SELECT * FROM CATALOG;";
     $result = mysqli_query($conn,$sql);
     $counter = 0;
//'.$counter.'
     while($row = mysqli_fetch_assoc($result)) {
       echo '<div class="row">
           <div class="col-md-5">
               <center><a>
                   <img class="img-responsive img-hover" src=".'.$row['image'].'" style="height:300px;widht:400px;" alt="">
               </a></center>
           </div>
           <div class="col-md-6">
               <form method = "POST" action="added_to_cart.php">
               <h3>'.$row['item_name'].'</h3>
               <p>'.$row['item_desc'].'</p>
               <p class = "sameLine">Cost: $<p class = "sameLine" name = "cost">'.$row['item_cost'].'</p></p>
               <input type="hidden" name="item_cost" value="'.$row['item_cost'].'"></input>
               <input type="hidden" name="item_name" value="'.$row['item_name'].'"></input>
               <input type="hidden" name="item_ID" value="'.$row['item_ID'].'"></input>
               <button class="btn btn-primary" type="submit">Add to Cart<i class="fa fa-angle-right"></i></button>
               </form>
           </div>
       </div>
       <hr>';
       $counter++;
     }
     ?>
    </div>
    <hr>
<!-- /.container -->

 <!-- jQuery -->
 <script src="js/jquery.js"></script>
 <!-- Bootstrap Core JavaScript -->
 <script src="js/bootstrap.min.js"></script>
 </body>
 </html>

<?php
 include 'footer.php';
?>
