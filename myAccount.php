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
  $sql2 = "SELECT * FROM USER_ITEMS WHERE Username = '$id';";
  $result = mysqli_query($conn,$sql);
  $result2 = mysqli_query($conn,$sql2);

  echo '<h3>My courses:</h3>';
  while($row = mysqli_fetch_assoc($result)) {
    echo '<hr><p>'.$row['Camp'].'</p><hr>';
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
