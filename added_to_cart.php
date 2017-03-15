<?php
 include 'header.php';
 if(!isset($_SESSION['id'])) {
     $message = "You must be logged in!";
     echo "<script type='text/javascript'>alert('$message');</script>";
     header('Location: login.php');
 }

if(isset($_POST['courseName']) && isset($_POST['cost']) && isset($_POST['spots']) && isset($_POST['courseID']) && isset($_POST['duration']) && isset($_POST['date'])) {
  $duration = $_POST['duration'];
  $date =  $_POST['date'];
  $course = $_POST['courseName'];
  $courseID = $_POST['courseID'];
  $cost = $_POST['cost'];
  $spots = $_POST['spots'];
  $child = $_POST['child'];
  $location = $_POST['location'];

  if($duration == "2 weeks"){
    $cost = $cost * 2;
  }
  $sql0 = "INSERT INTO `courseTemp`(`user`, `courseID`, `courseName`, `courseDuration`, `courseCost`, `courseDate`, `childName`,`location`) VALUES ('$id','$courseID','$course','$duration', '$cost','$date','$child','$location')";
  if(!($result0 = mysqli_query($conn,$sql0))) {
    echo '<script>location.href="register_fail.php"</script>';
  }
  else
  {
  $sql = "SELECT courses_cart FROM users WHERE Username = '$id';";
  $result = mysqli_query($conn,$sql);
  $row = mysqli_fetch_assoc($result);

  $cart_courses = $row['courses_cart'].$courseID;

  $sql = "UPDATE users SET courses_cart = '$cart_courses' WHERE Username = '$id';";
  $result = mysqli_query($conn,$sql);
  }

}else if(isset($_POST['item_name']) && isset($_POST['item_cost']) && isset($_POST['item_ID'])) {
  $item_name = $_POST['item_name'];
  $item_ID = $_POST['item_ID'];
  $item_cost = $_POST['item_cost'];


  $sql = "SELECT items_cart FROM users WHERE Username = '$id';";
  $result = mysqli_query($conn,$sql);
  $row = mysqli_fetch_assoc($result);

  $cart_items = $row['items_cart'].$item_ID;

  $sql = "UPDATE users SET items_cart = '$cart_items' WHERE Username = '$id';";
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
   #discounts {color: #5cb85c;}

   #emptyShop {text-align: center;}
   #continueShop {float: right;}
   #continueShop2 {float: right;}
   </style>
 </head>
 <body>
   <br>
   <br>
   <?php

   $sql = "SELECT courses_cart, items_cart FROM users WHERE Username = '$id';";
   $result = mysqli_query($conn,$sql);
   $row = mysqli_fetch_assoc($result);
   $array = str_split($row['courses_cart']);
   $array2 = str_split($row['items_cart']);
   $totalCost = $i = 0;
   $bool = $bool2 = false;
   // if first element in array and array2 == "" then display
   echo '<div id="discounts">
          <ul><b>Discounts:</b>
           <li>If you have more than 1 child registered you get a 10% discount!</li>
           <li>If you already registered or add a camp to cart and wish to buy a catalog item you get a 15% discount!</li>
         </ul>
        </div><br>';
//	echo "Course Cart: ".$row['courses_cart'];
//	echo "Item Cart: ".$row['items_cart'];
	if(($array[0] == "" && $array2[0] == "")){
    		echo '<h1 id="emptyShop"><span class="glyphicon glyphicon-shopping-cart"></span> Empty Shopping Cart!</h1>';
   	}
	else if($row['courses_cart'] == "" && $row['items_cart'] == "") {
		 echo '<h1 id="emptyShop"><span class="glyphicon glyphicon-shopping-cart"></span> Empty Shopping Cart!</h1>';
	}
   	else {
   		echo '<div class="container" style="width: 150%;">
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

                /*get Child names
                foreach($array as $i => $item) {
                  $sqlx = "SELECT childName FROM courseTemp WHERE user = '$id';";
                  $resultx = mysqli_query($conn,$sqlx);
                  $childs = array();
                  while ($rowx = mysqli_fetch_assoc($resultx)) {
                    array_push($childs, $rowx['childName']);
                  }
                }*/
               // print_r($childs);
               // print_r($array);
               // $rev = array_reverse($childs);
               // print_r($rev);
		if(!($array[0] == "")) {
                  $bool = true;
                  foreach($array as $i => $item) {
		    $sqlx = "SELECT childName FROM courseTemp WHERE user = '$id' AND courseID = '$array[$i]';";
                    $resultx = mysqli_query($conn,$sqlx);
		    $rev = mysqli_fetch_assoc($resultx);
                    $c = $rev['childName'];
		    $sql2 = "SELECT courseName, courseDuration, courseCost, childName FROM courseTemp WHERE courseID = '$array[$i]' AND user = '$id' AND childName = '$c';";
                   // echo $sql2."           ";
                    $sqlA = "SELECT image FROM COURSES WHERE course_ID = '$array[$i]';";
                    $resultA = mysqli_query($conn,$sqlA);
                    $rowA = mysqli_fetch_assoc($resultA);
                    $result2 = mysqli_query($conn,$sql2);
                    while($row2 = mysqli_fetch_assoc($result2)){
                      $rows2[] = $row2;
                      $totalCost += $row2['courseCost'];
                    }

                  foreach($rows2 as $row4) {
                    echo'
          					<div class="row">
          						<div class="col-xs-2"><img class="img-responsive" src="./Images/Course/'.$rowA['image'].'">
          						</div>
          						<div class="col-xs-4">
          							<h4 class="product-name"><strong></strong></h4><h4><small>'.$row4['courseName'].'</small></h4>
                        <h5 class="product-name"><strong></strong></h4><h4><small>'.$row4['courseDuration'].'</small></h5>
                        <h5 class="product-name"><strong></strong></h4><h4><small>Child: '.$row4['childName'].'</small></h5>
          						</div>
          						<div class="col-xs-6">
          							<div class="col-xs-6 text-right">';
                        echo'
          								<h6><strong>$'.$row4['courseCost'].'.00<span class="text-muted"></span></strong></h6>';
                        echo'
          							</div>
          							<div class="col-xs-2">
                          <form method="POST" action="remove_cart_item.php">
                            <input type="hidden" name="courseID" value="'.$array[$i].'"></input>
                            <input type="hidden" name= "courseCost"  value = "'.$row4['courseCost'].'"></input>
                            <input type="hidden" name= "courseDuration"  value = "'.$row4['courseDuration'].'"></input>
                            <input type="hidden" name = "childName" value = "'.$row4['childName'].'"></input>
            								<button type="submit" class="btn btn-link btn-xs">
            									<span class="glyphicon glyphicon-trash"> </span>
            								</button>
                          </form>
          							</div>
          						</div>
          					</div>
          					<hr>
                    ';
                  }
                  $i++;
                  $rows2 = array();
                }
              }
                //items
                $j = 0;
                if(!($array2[0] == "")) {
                  $bool2 = true;
                  while($j < sizeof($array2)) {
                    $sql3 = "SELECT image, item_name, item_cost FROM CATALOG WHERE item_ID = '$array2[$j]';";
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
                          <input type="hidden" name="itemID" value="'.$array2[$j].'"></input>
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
                    $j++;
                  }
                }
                $sql = "SELECT Username FROM USER_CAMPS WHERE Username = '$id';";
                $result = mysqli_query($conn,$sql);

                if( mysqli_num_rows($result) > 0)
                {
                  $bool = true;
                }
                  echo'
        					<div class="row">
        						<div class="text-center">
        							<div class="col-xs-9">';
                      //check for discounts : if more than 1 child and if already signed up for course and buys catalog item
                      $discount1 = floor((0.15*$totalCost));
                      $discount2 = floor((0.10*$totalCost));
                      if($bool && $bool2) {
                        echo '<h6 class="text-right">Total without discount: $'.$totalCost.'.00</h6>';
        								echo '<h6 class="text-right">discount: - $'.floor((0.15*$totalCost)).'.00</h6>';
                      }
                      $sqly = "SELECT childName FROM courseTemp WHERE user = '$id';";
                      $res = mysqli_query($conn,$sqly);
                      $row = mysqli_fetch_assoc($res);
                      $child = $row['childName'];
                      $sqlx = "SELECT COUNT(*) FROM USER_CAMPS WHERE Username = '$id' AND childName != '$child';";
                      $sqlz = "SELECT COUNT(*) FROM USER_CAMPS WHERE Username = '$id';";

                      $res = mysqli_query($conn,$sqlx);
                      $row = mysqli_fetch_assoc($res);
                      $resz = mysqli_query($conn,$sqlz);
                      $rowz = mysqli_fetch_assoc($resz);

                      if( $row['COUNT(*)'] > 1 || $rowz['COUNT(*)'] > 1) {
        								echo '<h6 class="text-right">discount: - $'.floor((0.10*$totalCost)).'.00</h6>';
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
                      $totalCost = $totalCost - $discount1;

                    }

                    $sqlx = "SELECT COUNT(*) FROM USER_CAMPS WHERE Username = '$id' AND childName != '$child';";
                    $res = mysqli_query($conn,$sqlx);
                    $row = mysqli_fetch_assoc($res);

                    if( $row['COUNT(*)'] > 1 || $rowz['COUNT(*)'] > 1) {
                      $totalCost = $totalCost - $discount2;
                    }
                    echo'
        							<h4 class="text-right">Total: $'.$totalCost.'.00 <strong></strong></h4>
        						</div>
        						<div class="col-xs-3">
                    <form action="pay.php" method="post">
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
