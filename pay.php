<?php
include 'header.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <br>
  <br>
  <title>EduCamps</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!--script type="text/javascript" src="https://ajax.microsoft.com/ajax/jQuery/jquery-1.4.2.min.js"></script-->
  <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
  <br>
  <br>
  <br>
  <br>
  <h2 style = "text-align: center;"> Total: $<?php echo $_POST['totalPrice'];?>.00</h2>
<div class="card-wrapper"></div>
  <br>
  <br>
  <div class="form-container active" style="text-align: center; padding-top: 10px;">
      <form action="pay_confirm.php">
          <input placeholder="Card number" type="tel" name="number" required data-validation-required-message="Card Number Required.">
          <input placeholder="Full name" type="text" name="name" required data-validation-required-message="Name Required.">
          <input placeholder="MM/YY" type="tel" name="expiry" required data-validation-required-message="Expiration Date Required.">
          <input placeholder="CVC" type="number" name="cvc" required data-validation-required-message="CVC Required."><br><br>
          <button type="submit" class="btn btn-success btn-block">$ Pay</button>
      </form>
  </div>
</body>
<script src="js/card.js"></script>
<script>
  var card = new Card({
      form: 'form',
      container: '.card-wrapper'
  });
</script>
</html>
