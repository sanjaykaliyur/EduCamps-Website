<?php
  include 'header.php';

  // get all cart items
  $sql = "SELECT courses_cart, items_cart FROM users WHERE Username = '$id';";
  $result = mysqli_query($conn,$sql);
  $row = mysqli_fetch_assoc($result);

  if(isset($_POST['courseID']))
  {
    // if courses then split the sql result
    $courseID = $_POST['courseID'];
    $courseCost = $_POST['courseCost'];
    $courseDur = $_POST['courseDuration'];
    $childName = $_POST['childName'];
    $array = str_split($row['courses_cart']);
    // search the splitted SQL result and search for the courseID posted
    $key = array_search($courseID,$array);
    // remove the course from array
    unset($array[$key]);
    // reset the values and keys to normal
    $newArray = array_values($array);
    $newA = implode($newArray);
    $sql1 = "UPDATE users SET courses_cart = '$newA' WHERE Username = '$id';";
    $result1 = mysqli_query($conn,$sql1);

    $sql3 = "DELETE FROM courseTemp WHERE courseID = '$courseID' AND courseCost = '$courseCost' AND courseDuration = '$courseDur' AND user = '$id' AND childName = '$childName';";
    echo "<br><br><br><br><br><br><br><br>";
    echo $sql3;
    $result3 = mysqli_query($conn,$sql3);
  }
  if(isset($_POST['itemID']))
  {
    $itemID = $_POST['itemID'];
    $array2 = str_split($row['items_cart']);
    $key2 = array_search($itemID,$array2);
    unset($array2[$key2]);
    $newArray2 = array_values($array2);
    $newA2 = implode($newArray2);
    $sql2 = "UPDATE users SET items_cart = '$newA2' WHERE Username = '$id';";
    $result2 = mysqli_query($conn,$sql2);

  }
  header('Location: ' . $_SERVER['HTTP_REFERER']);
?>
