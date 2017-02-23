<?php
include 'header.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>EduCamps</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!--script type="text/javascript" src="https://ajax.microsoft.com/ajax/jQuery/jquery-1.4.2.min.js"></script-->
  <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
<?php

$childName = $childDOB =$parentName = $parentName = $parentEmail = $childGrade = "";
$campDuration = $special = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["childName"])) {
    $childName = "Child name is required";
  } else {
    $childName = $_POST["childName"];
  }
  // test last name
  if (empty($_POST["childDOB"])) {
    $childDOB = "Last name is required";
  } else {
    $childDOB = $_POST["childDOB"];
  }
  // test residence
  if (empty($_POST["parentName"])) {
    $parentName = "Parent's name is required";
  } else {
    $parentName = $_POST["parentName"];
  }
  if (empty($_POST["parentEmail"])) {
    $parentEmail = "Parent's email is required";
  } else {
    $parentEmail = $_POST["parentEmail"];
  }
  // test language
  if (empty($_POST["childGrade"])) {
    $childGrade = "Child's grade is required";
  } else {
    $childGrade = $_POST["childGrade"];
  }
  // test skills
  if (empty($_POST["campDuration"])) {
    $campDuration = "Camp duration are required";
  } else {
    $campDuration = $_POST["campDuration"];
  }
  if (empty($_POST["special"])) {
    $special = "Special instructions are required";
  } else {
    $special = $_POST["special"];
  }
}
?>
<div class="card-wrapper"></div>
  <div class="form-container active" style="text-align: center; padding-top: 10px;">
      <form action="">
          <input placeholder="Card number" type="tel" name="number">
          <input placeholder="Full name" type="text" name="name">
          <input placeholder="MM/YY" type="tel" name="expiry">
          <input placeholder="CVC" type="number" name="cvc"><br><br>
          <button type="submit">Pay</button>
      </form>
  </div>
</body>
<script src="card.js"></script>
<script>
  var card = new Card({
      form: 'form',
      container: '.card-wrapper',

      formSelectors: {
          nameInput: 'input[name="first-name"], input[name="last-name"]'
      }
  });
</script>
</html>