<?php
	session_start();
  include './functions.php';
  $conn = dbconnect();

  if(isset($_POST['username']) && isset($_POST['password'])) {
    $password = $_POST['password'];
    $username = $_POST['username'];
    $address = $_POST['address'];
    $parentEmail = $_POST['parentEmail'];

		$childName1 = $_POST['childName1'];
		$sql = "INSERT INTO `children`(`username`, `childName`) VALUES ('$username','$childName1');";
		$result = mysqli_query($conn,$sql);

		if((isset($_POST['childName2']))) {
			$childName2 = $_POST['childName2'];
			$sql = "INSERT INTO `children`(`username`, `childName`) VALUES ('$username','$childName2');";
			$result = mysqli_query($conn,$sql);
		}
		if((isset($_POST['childName3']))) {
				$childName3 = $_POST['childName3'];
				$sql = "INSERT INTO `children`(`username`, `childName`) VALUES ('$username','$childName3');";
				$result = mysqli_query($conn,$sql);
		}
		if((isset($_POST['childName4']))) {
				$childName4 = $_POST['childName4'];
				$sql = "INSERT INTO `children`(`username`, `childName`) VALUES ('$username','$childName4');";
				$result = mysqli_query($conn,$sql);
		}
		if((isset($_POST['childName5']))) {
				$childName5 = $_POST['childName5'];
				$sql = "INSERT INTO `children`(`username`, `childName`) VALUES ('$username','$childName5');";
				$result = mysqli_query($conn,$sql);
		}
		if((isset($_POST['childName6']))) {
				$childName6 = $_POST['childName6'];
				$sql = "INSERT INTO `children`(`username`, `childName`) VALUES ('$username','$childName6');";
				$result = mysqli_query($conn,$sql);
		}
		if((isset($_POST['childName7']))) {
				$childName7 = $_POST['childName7'];
				$sql = "INSERT INTO `children`(`username`, `childName`) VALUES ('$username','$childName7');";
				$result = mysqli_query($conn,$sql);
		}
		if((isset($_POST['childName8']))) {
				$childName8 = $_POST['childName8'];
				$sql = "INSERT INTO `children`(`username`, `childName`) VALUES ('$username','$childName8');";
				$result = mysqli_query($conn,$sql);
		}
		if((isset($_POST['childName9']))) {
				$childName9 = $_POST['childName9'];
				$sql = "INSERT INTO `children`(`username`, `childName`) VALUES ('$username','$childName9');";
				$result = mysqli_query($conn,$sql);
		}
		if((isset($_POST['childName10']))) {
				$childName10 = $_POST['childName10'];
				$sql = "INSERT INTO `children`(`username`, `childName`) VALUES ('$username','$childName10');";
				$result = mysqli_query($conn,$sql);
		}

    $bcrypt = new Bcrypt(15);
    $hash = $bcrypt->hash($password);

     $sql = "INSERT INTO users (`Email`, `Username`, `Password`, `Address`) VALUES('$parentEmail','$username','$hash','$address')";
     $result = mysqli_query($conn,$sql);
     if($result){
         echo "<script> location.href='login.php';</script>";
     }else{
        echo '<script> alert("fail to register")</script>';
        echo "<script> location.href='login.php';</script>";
      }
  }
  if(isset($_POST['user']) && isset($_POST['pass'])) {
    $dbservername = "localhost";
    $dbusername = "root";
    $dbpassword = "toor";
    $dbname = "EduCamps";
    $conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);

    $username = $_POST['user'];
    $password = $_POST['pass'];
	  $sql = "SELECT * FROM users WHERE Username = '$username';";
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
		echo '<script>location.href="login_fail.php"</script>';
	}
}

?>
