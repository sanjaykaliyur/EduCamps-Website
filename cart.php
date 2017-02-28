<?php
  include 'header.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <br>
  <br>
  <br>
  <h2> Cart </h2>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <br>
  <br>
  <div class="form-style-2">
  <div class="form-style-2-heading"><strong>Register your Child for $499</strong></div>
  <form action= "pay.php" method="post" style="padding-left: 20px;">
    <label for="field1"><span>Child name<span class="required">*</span></span><input id = "childName" required data-validation-required-message="Child Name Required."/></label>
    <br>
    <br>
    <label for="field2"><span>Date of Birth<span class="required">*</span></span><input id = "childDOB" type="date" class="input-field" name="field2" value="" required data-validation-required-message="Date Of Birth Required" /></label>
    <br>
    <br>
    <label for="field1"><span>Parent name<span class="required">*</span></span><input id = "parentName"type="text" class="input-field" name="field1" value="" required data-validation-required-message="Parent Name Required." /></label>
    <br>
    <br>
    <label for="field1"><span>Parent's Email<span class="required">*</span></span><input id = "parentEmail" type="text" class="input-field" name="field1" value="" required data-validation-required-message="Parent Email Required." /></label>
    <br>
    <br>
    <label><span>Parent's Telephone</span><input type="text" class="tel-number-field" name="tel_no_1" value="" maxlength="4" >-<input type="text" class="tel-number-field" name="tel_no_2" value="" maxlength="4"  />-<input type="text" class="tel-number-field" name="tel_no_3" value="" maxlength="10"/></label>
   <br>
   <br>
    <label for="field4"><span>Child's Grade*</span><br><select id = "childGrade" required data-validation-required-message="Child Grade Required." name="field4" class="select-field">
      <option value="General Question">6th grade</option>
      <option value="Advertise">7th grade</option>
      <option value="Partnership">8th grade</option>
    </select></label>
    <br>
    <br>
    <label for="field5"><span>Camp Duration*</span><br><select id = "campDuration" name="field4" class="select-field" required data-validation-required-message="Camp Duration Required.">
      <option>1 week</option>
      <option>2 weeks</option>
    </select></label>
    <br>
    <br>
    <label for="field5"><span>Special Instructions<span class="required">*</span></span><br><textarea id="special" name="field5" class="textarea-field" placeholder='allergies, medicines, or any exta details' required data-validation-required-message="Please enter information."></textarea></label>
    <br>
    <br>
    <label><input type="submit" value="Continue"/></label>
  </form>
  </div>
</body>
</html>
<script src="js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<?php
  include 'footer.php'
?>
