<?php
  include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <br>
  <br>
  <br>
  <h2>Register</h2>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
  <script>
  $(document).ready(function(){
    $('#AddButton').click( function() {
        var counter = $('#TextBox').val();
        if (counter < 10){
          counter++ ;
          document.getElementById('addChild').innerHTML += '<label for="field1"><span>Child '+ counter +' Name: <span class="required"></span></span><input name ="childName'+counter+'"/></label><br>';
          $('#TextBox').val(counter);
       }
       else{
       	document.getElementById('addChild').innerHTML += '<h5>Max amount of children!</h5>';
        $('#AddButton').remove();
       }
    });
  });
  </script>
  <style>
	.wrapper {display: inline;}
  </style>
</head>
<body>
  <br>
  <br>
  <div class="form-style-2">
  <div class="form-style-2-heading"></div>
  <form action= "verify.php" method="post" style="padding-left: 20px;">
    <label for="field1"><span>Username<span class="required">*</span></span><input name = "username" maxlength="44" required data-validation-required-message="Username Required."/></label>
    <br>
    <br>
    <label for="field1"><span>Password<span class="required">*</span></span><input name = "password" type = "password" required data-validation-required-message="Password is required."/></label>
    <br>
    <br>
    <div class = "wrapper">
    	<h4><b style="color: red;">*Add</b> as many children then type their names</h4>
    </div>
    <label for="field1"><span>Child 1 Name: <span class="required"></span></span><input name ="childName1"/></label>
    <input type="hidden" name="childName" id="TextBox" value="1" />
    <input type="Button" id='AddButton' value="+" />
    <br>
    <div id="addChild">
    </div>
    <!--div id="addChild">
      <label for="field1"><span>Child 1 name<span class="required">*</span></span><input name ="childName1" required data-validation-required-message="Child Name Required."/></label><br> <button id="addKid" onclick = "add_fields('<?php ?>)">+</button>
      <label for="field1"><span>Child 2 name<span class="required"></span></span><input name ="childName2"/></label><br>
      <label for="field1"><span>Child 3 name<span class="required"></span></span><input name ="childName3"/></label><br>
      <label for="field1"><span>Child 4 name<span class="required"></span></span><input name ="childName4"/></label><br>
      <label for="field1"><span>Child 5 name<span class="required"></span></span><input name ="childName5"/></label><br>
      <label for="field1"><span>Child 6 name<span class="required"></span></span><input name ="childName6"/></label><br>
      <label for="field1"><span>Child 7 name<span class="required"></span></span><input name ="childName7"/></label><br>
      <label for="field1"><span>Child 8 name<span class="required"></span></span><input name ="childName8"/></label><br>
      <label for="field1"><span>Child 9 name<span class="required"></span></span><input name ="childName9"/></label><br>
      <label for="field1"><span>Child 10 name<span class="required"></span></span><input name ="childName10"/></label>
    </div-->
    <br>
    <!--label for="field2"><span>Date of Birth<span class="required">*</span></span><input id = "childDOB" type="date" class="input-field" name="field2" value="" required data-validation-required-message="Date Of Birth Required" /></label>
    <br>
    <br-->
    <label for="field1"><span>Parent name<span class="required">*</span></span><input id = "parentName"type="text" class="input-field" name="field1" value="" required data-validation-required-message="Parent Name Required."/></label>
    <br>
    <br>
    <label for="field1"><span>Parent's Email<span class="required">*</span></span><input name = "parentEmail" type="text" class="input-field" name="field1" value="" maxlength="44" required data-validation-required-message="Parent Email Required." /></label>
    <br>
    <br>
    <label><span>Parent's Telephone</span><input type="text" class="tel-number-field" name="tel_no_1" value="" maxlength="4" >-<input type="text" class="tel-number-field" name="tel_no_2" value="" maxlength="4"  />-<input type="text" class="tel-number-field" name="tel_no_3" value="" maxlength="10"/></label>
   <br>
   <br>
    <!--label for="field4"><span>Child's Grade*</span><br><select id = "childGrade" required data-validation-required-message="Child Grade Required." name="field4" class="select-field">
      <option value="General Question">6th grade</option>
      <option value="Advertise">7th grade</option>
      <option value="Partnership">8th grade</option>
    </select></label-->
    <!--br>
    <br>
    <label for="field5"><span>Camp Duration*</span><br><select id = "campDuration" name="field4" class="select-field" required data-validation-required-message="Camp Duration Required.">
      <option>1 week</option>
      <option>2 weeks</option>
    </select></label-->
    <br>
    <br>
    <label for="field5"><span>Address<span class="required">*</span></span><br><textarea id="address" name="address" class="textarea-field" placeholder='Street, State, and ZIP code' maxlength="254" required data-validation-required-message="Please enter address."></textarea></label>
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
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<?php
  include 'footer.php'
?>
