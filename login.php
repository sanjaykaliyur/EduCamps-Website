<?php include 'header.php' ?>
<!DOCTYPE html>
<html lang="en">

<?php
session_start();
//Verify session
if(isset($_SESSION['name'])) {
    header('Location: /index.php');
    exit;
}
?>
<head>
  <style>
  .row {
    padding-left: 40%;
  }
  </style>
</head>

<body>
  <br>
  <br>
  <br>
        <div class="row">
            <div class="col-md-8">
                <h3>Sign in to continue</h3>
                <br>
                <form method="POST" action="verify.php">
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Username:</label>
                            <input type="text" class="form-control" style="width: 30%;" name="user" required data-validation-required-message="Please enter your username.">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Password:</label>
                            <input type="password" class="form-control" style="width: 30%;" name="pass" required data-validation-required-message="Please enter your password">
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" class="btn btn-primary">Log In</button>
                </form>
                <br><a type="button" href="createUser.php" class="btn btn-primary">Create Account</a><br>
            </div>

        </div>
        <hr>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Contact Form JavaScript -->
    <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

</body>

</html>
<?php include 'footer.php' ?>
