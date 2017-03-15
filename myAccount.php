<?php
include 'header.php';
?>
<br>
<br>
<br>
<br>
<?php
echo '<div id="accountWrapper" style="padding-left: 10px;">';
  $sql = "SELECT * FROM USER_CAMPS WHERE Username = '$id';";
  $sql1 = "SELECT * FROM USERS WHERE Username = '$id';";
  $sql2 = "SELECT * FROM USER_ITEMS WHERE Username = '$id';";
  $result = mysqli_query($conn,$sql);
  $result1 = mysqli_query($conn,$sql1);
  $row1 = mysqli_fetch_assoc($result1);
  $result2 = mysqli_query($conn,$sql2);

  echo '<h3>My courses:</h3>';
  while($row = mysqli_fetch_assoc($result)) {
    echo '<hr><p><h2>'.$row['Camp'].'</h2></p>';
    echo '<p><b>Child:</b> '.$row['childName'].'</p>';
    echo '<p><b>Duration:</b> '.$row['duration'].'</p>';
    echo '<p><b>Date Period:</b> '.$row['date'].'</p>';
    echo '<p><b>Location: </b> '.$row['location'].'</p><hr>';
  }
  echo '<br>
        <h3> My items:</h3>';
  while($row2 = mysqli_fetch_assoc($result2)) {
    echo '<hr><p>'.$row2['item'].'</p><hr>';
  }
  echo '</div>';
?>

<?php
include 'footer.php';
?>
