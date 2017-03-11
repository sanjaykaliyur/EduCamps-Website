<?php
	session_start();
  include './functions.php';
  $conn = dbconnect();

  if(isset($_POST['username']) && isset($_POST['password'])) {
    $password = $_POST['password'];
    $username = $_POST['username'];
    $address = $_POST['address'];
    $parentEmail = $_POST['parentEmail'];
		$childName = $_POST['childName'];

    $bcrypt = new Bcrypt(15);
    $hash = $bcrypt->hash($password);
    //$sql=  "insert into STUDENTS_MODULES (`MODULE_ModuleID`,`MODULE_Name`,`STUDENT_StudentID`,`Complete`,`Start_Date`,`TotalRating`,`badgeRationale`,`userScreenshot`)";
    //$sql= $sql." values('$moduleID',(SELECT Name from MODULE2 WHERE ModuleID=$moduleID LIMIT 1),'$id','$complete','$Start_Date', NULL,'$badgeRationale', NULL)";
     $sql = "INSERT INTO USERS (`Email`, `Username`, `Password`, `Address`,`childName`) VALUES('$parentEmail','$username','$hash','$address','$childName')";
     $result = mysqli_query($conn,$sql);
     if($result){
         echo "<script> location.href='login.php';</script>";
     }/*else{
        echo '<script> alert("fail to register")</script>';
        echo "<script> location.href='login.php';</script>";
      }*/
  }
  if(isset($_POST['user']) && isset($_POST['pass'])) {
    $dbservername = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "EduCamps";
    $conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);

    $username = $_POST['user'];
    $password = $_POST['pass'];
	  $sql = "SELECT * FROM USERS WHERE Username = '$username';";
  	$result = mysqli_query($conn,$sql);
    $count = mysqli_num_rows($result);

    $bcrypt = new Bcrypt(15);

	if($count == 1) {
		$row = mysqli_fetch_assoc($result);
		if($bcrypt->verify($password, $row['Password'])) {
			//echo "Verification Success<br>";
			$_SESSION['id']=$username;
			echo '<script>location.href="login_confirm.php"</script>';
		}else{
			echo '<script>location.href="login_fail.php"</script>';
		}
	}
	else{
		echo '<script>location.href="login_fail2.php"</script>';
	}
}

?>
