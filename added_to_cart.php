<?php
 include 'header.php';
 if(!isset($_SESSION['id'])) {
     $message = "You must be logged in!";
     echo "<script type='text/javascript'>alert('$message');</script>";
     header('Location: register.php');
 }
session_start();
if(isset($_POST['course']) && isset($_POST['cost']) && isset($_POST['spots']) && isset($_POST['courseID'])) {
  $course = $_POST['course'];
  $courseID = $_POST['courseID'];
  $cost = $_POST['cost'];
  $spots = $_POST['spots'];

  $sql = "SELECT courses_cart FROM USERS WHERE Username = '$id';";
  $result = mysqli_query($conn,$sql);
  $row = mysqli_fetch_assoc($result);

  //$cart_items = $row['items_cart'];
  $cart_courses = $row['courses_cart'].$courseID;

  $sql = "UPDATE USERS SET courses_cart = '$cart_courses' WHERE Username = '$id';";
  $result = mysqli_query($conn,$sql);

}else if(isset($_POST['item_name']) && isset($_POST['item_cost']) && isset($_POST['item_ID'])) {
  $item_name = $_POST['item_name'];
  $item_ID = $_POST['item_ID'];
  $item_cost = $_POST['item_cost'];


  $sql = "SELECT items_cart FROM USERS WHERE Username = '$id';";
  $result = mysqli_query($conn,$sql);
  $row = mysqli_fetch_assoc($result);

  $cart_items = $row['items_cart'].$item_ID;

  $sql = "UPDATE USERS SET items_cart = '$cart_items' WHERE Username = '$id';";
  $result = mysqli_query($conn,$sql);
}
?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
   <br>
 	 <br>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" href="style.css">
   <style>
   body {margin-top: 20px;}
   </style>
 </head>
 <body>
   <?php

   $sql = "SELECT courses_cart, items_cart FROM USERS WHERE Username = '$id';";
   $result = mysqli_query($conn,$sql);
   $row = mysqli_fetch_assoc($result);
   $array = str_split($row['courses_cart']);
   $array2 = str_split($row['items_cart']);
   $totalCost = $i = 0;
   $i = 0;
   $bool = $bool2 = false;
   // if first element in array and array2 == "" then display

   if($array[0] == "" && $array2[0] == ""){
    echo '<h1 style="text-align: center;"><span class="glyphicon glyphicon-shopping-cart"></span> Empty Shopping Cart!</h1>';
   }
   else {
   echo '<div class="container">
        	<div class="row">
        		<div class="col-xs-8">
        			<div class="panel panel-info">
        				<div class="panel-heading">
        					<div class="panel-title">
        						<div class="row">
        							<div class="col-xs-6">
        								<h5><span class="glyphicon glyphicon-shopping-cart"></span> Shopping Cart</h5>
        							</div>
        							<div class="col-xs-6">
                        <button type = "submit" id = "continueShop" class="btn btn-primary"><span class="glyphicon glyphicon-share-alt"></span>Courses</button>
                        <script type="text/javascript">
                          document.getElementById("continueShop").onclick = function () {
                            location.href = "register2.php";
                          };
          								 </script>
                        <button type = "submit" id = "continueShop2" class="btn btn-primary"><span class="glyphicon glyphicon-share-alt"></span>Catalog</button>
                        <script type="text/javascript">
                          document.getElementById("continueShop2").onclick = function () {
                            location.href = "catalog2.php";
                          };
          								 </script>
        							</div>
        						</div>
        					</div>
        				</div>
        				<div class="panel-body">';
                //courses
                if(!($array[0] == "")) {
                  $bool = true;
                while($i < sizeof($array)) {
                  $sql2 = "SELECT * FROM COURSES WHERE course_ID = '$array[$i]';";
                  $result2 = mysqli_query($conn,$sql2);
                  $row2 = mysqli_fetch_assoc($result2);
                  echo'
        					<div class="row">
        						<div class="col-xs-2"><img class="img-responsive" src="http://placehold.it/100x70">
        						</div>
        						<div class="col-xs-4">
        							<h4 class="product-name"><strong></strong></h4><h4><small>'.$row2['course_name'].'</small></h4>
        						</div>
        						<div class="col-xs-6">
        							<div class="col-xs-6 text-right">
        								<h6><strong>$'.$row2['cost'].'.00<span class="text-muted"></span></strong></h6>
        							</div>
        							<div class="col-xs-2">
                        <form method="POST" action="remove_cart_item.php">
                          <input type="hidden" name="courseID" value="'.$array[$i].'"></input>
          								<button type="submit" class="btn btn-link btn-xs">
          									<span class="glyphicon glyphicon-trash"> </span>
          								</button>
                        </form>
        							</div>
        						</div>
        					</div>
        					<hr>
                  ';
                  $totalCost += $row2['cost'];
                  $i++;
                }
              }
                //items
                $i = 0;
                if(!($array2[0] == "")) {
                  $bool2 = true;
                  while($i < sizeof($array2)) {
                    $sql3 = "SELECT * FROM CATALOG WHERE item_ID = '$array2[$i]';";
                    $result3 = mysqli_query($conn,$sql3);
                    $row3 = mysqli_fetch_assoc($result3);

                    echo'
          					<div class="row">
          						<div class="col-xs-2"><img class="img-responsive" src=".'.$row3['image'].'">
          						</div>
          						<div class="col-xs-4">
          							<h4 class="product-name"><strong></strong></h4><h4><small>'.$row3['item_name'].'</small></h4>
          						</div>
          						<div class="col-xs-6">
          							<div class="col-xs-6 text-right">
          								<h6><strong>$'.$row3['item_cost'].'.00<span class="text-muted"></span></strong></h6>
          							</div>
          							<div class="col-xs-2">
                        <form method="POST" action="remove_cart_item.php">
                          <input type="hidden" name="itemID" value="'.$array2[$i].'"></input>
                          <button type="submit" class="btn btn-link btn-xs">
                            <span class="glyphicon glyphicon-trash"> </span>
                          </button>
                        </form>
          							</div>
          						</div>
          					</div>
          					<hr>
                    ';
                    $totalCost += $row3['item_cost'];
                    $i++;
                  }
                }
                $sql = "SELECT * FROM USER_CAMPS WHERE Username = '$id';";
                $result = mysqli_query($conn,$sql);
                if( mysqli_num_rows($result) > 0)
                {
                  $bool = true;
                }
                  echo'
        					<div class="row">
        						<div class="text-center">
        							<div class="col-xs-9">';
                        if($bool && $bool2) {
                          echo '<h6 class="text-right">Total without discount: $'.$totalCost.'.00</h6>';
          								echo '<h6 class="text-right">discount: - $'.floor((0.15*$totalCost)).'.00</h6>';
                        }
                        echo '
        							</div>
        							<!--div class="col-xs-3">
        								<button type="button" class="btn btn-default btn-sm btn-block">
        									Update cart
        								</button>
        							</div-->
        						</div>
        					</div>
        				</div>
        				<div class="panel-footer">
        					<div class="row text-center">
        						<div class="col-xs-9">';
                    if($bool && $bool2)
                    {
                      $totalCost = $totalCost - floor((0.15*$totalCost));
                    }
                    echo'
        							<h4 class="text-right">Total: $'.$totalCost.'.00 <strong></strong></h4>
        						</div>
                    <form action="pay.php" method="post">
        						<div class="col-xs-3">
                      <input type="hidden" name="totalPrice" value="'.$totalCost.'"></input>
        							<button type="submit" class="btn btn-success btn-block">
        								Checkout
        							</button>
                    </form>
        						</div>
        					</div>
        				</div>
        			</div>
        		</div>
        	</div>
        </div>';
      }
   ?>
</body>
</html>
