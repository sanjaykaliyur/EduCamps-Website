
<?php include 'header.php';
$Start_Date = date("Y-m-d");
  if(isset($_POST['campName']) && isset($_POST['comment'])) {
    $camp = $_POST['campName'];
    $comment = $_POST['comment'];
    $sql = "INSERT INTO `FORUM`(`Username`, `entryDate`, `response`, `campName`) VALUES ('$id','$Start_Date','$comment','$camp');";
    $result = mysqli_query($conn,$sql);
    if($result){
      echo 'Allowed';
    }
  }
  header('Location: ' . $_SERVER['HTTP_REFERER']);

?>
