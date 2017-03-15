<?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">
    <br>
    <br>
    <br>
    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <center><h1 class="page-header">Payment confirmed</h1></center>
            </div>
        </div>
        <!-- /.row -->
        <h3> Bought: </h3>
        <?php
        $sql = "SELECT courses_cart, items_cart FROM users WHERE Username = '$id';";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);
        $items_cart = $row['items_cart'];
        $courses_cart = $row['courses_cart'];
        $array = str_split($row['courses_cart']);
        $array2 = str_split($row['items_cart']);
        $i = 0;
        $bool = $bool2 = false;

        if(!($array[0] == "")) {
          $bool = true;
          foreach($array as $i => $item) {
            $sql2 = "SELECT courseName, courseDuration, courseCost, courseDate, childName, location FROM courseTemp WHERE courseID = '$array[$i]' AND user = '$id';";
            $result2 = mysqli_query($conn,$sql2);
            while($row2 = mysqli_fetch_assoc($result2)){
              $rows2[] = $row2;
            }
            foreach($rows2 as $row2) {
              $course_name = $row2['courseName'];
              $course_cost = $row2['courseCost'];
              $course_dur = $row2['courseDuration'];
              $course_date = $row2['courseDate'];
              $childName = $row2['childName'];
              $location = $row2['location'];

              $sql4 = "INSERT INTO USER_CAMPS (Username, Camp, Price, duration, date, childName, location) VALUES ('$id','$course_name','$course_cost','$course_dur','$course_date','$childName','$location');";
              echo '<hr><p>'.$course_name.' <b> for '.$childName.'</b></p><hr>';
              if($result4 = mysqli_query($conn,$sql4)) {
                $sql5 = "SELECT spots FROM COURSES WHERE course_ID = '$array[$i]';";
                $result5 = mysqli_query($conn,$sql5);
                $row5 = mysqli_fetch_assoc($result5);
                $spots = $row5['spots'] - 1;
                $sql6 = "UPDATE COURSES SET spots = '$spots' WHERE course_ID = '$array[$i]';";
                $result6 = mysqli_query($conn,$sql6);
              }
              else {
                echo '<script> alert("Fail to register. Child & Camp already paid.")</script>';
                echo "<script> location.href='register2.php';</script>";
              }
              $sql7 = "DELETE FROM courseTemp WHERE user = '$id' AND courseID = '$array[$i]';";
              $result7 = mysqli_query($conn,$sql7);
            }
            $i++;
            $rows2 = array();
          }
        }

        $i = 0;
        if(!($array2[0] == "")) {
          $bool2 = true;
          while($i < sizeof($array2)) {
            $sql3 = "SELECT item_name, item_cost FROM CATALOG WHERE item_ID = '$array2[$i]';";
            $result3 = mysqli_query($conn,$sql3);
            $row3 = mysqli_fetch_assoc($result3);
            $item_name = $row3['item_name'];
            $item_cost = $row3['item_cost'];
            $sql4 = "INSERT INTO USER_ITEMS (Username, item, Price) VALUES ('$id','$item_name','$item_cost');";
            $result4 = mysqli_query($conn,$sql4);
            echo '<hr><p>'.$row3['item_name'].'</p><hr>';
            $i++;
          }
        }
        $sql7 = "UPDATE users SET courses_cart = '', items_cart = '' WHERE Username = '$id';";
        $result7 = mysqli_query($conn,$sql7);
        if(!$bool && !$bool2)
        {
          echo '<h4>You were charged $0</h4>';
        }
        ?>
        <!-- Content Row -->
        <div class="row">
            <center><div class="col-lg-12">
                <p> Your payment was confirmed. Thank you for doing business with us. You will receive an email receipt detailing your purchases.</p>
                <p>To register for camps, click <a href="register.php">here</a>.</p>
                <p>To purchase camp accessories, click <a href="catalog.php">here</a>.</p>
                <p>To return to the home page, click <a href="index.php">here</a>.</p>
            </div></center>
        </div>
        <hr>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>

<?php include 'footer.php'; ?>
