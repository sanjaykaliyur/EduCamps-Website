<?php
/* Allows parents to register their children for camp

   Child's full name

   Date of birth

   Parents' name

   Parents' contact info and phone

   Grade level and school

   Special instructions (allergies, etc)

   Camp duration (1 or 2 weeks)

   Fee (automatically calculated based on duration ^)

   Payment information (payment by credit card)

   Confirmation should be display upon successful registration

   Page also creates an account based on the account information taken in (requires database)

 */

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

 include 'header.php'
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
   <title>EduCamps</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <body style= "background-color: #00CED1;">
   <div class="form-style-2">
   <div class="form-style-2-heading">Register your Child for $499</div>
   <form action= "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
     <label for="field1"><span>Child name<span class="required">*</span></span><input id = "childName" /></label>
     <span class="error"> <?php echo $childName;?></span>

     <label for="field2"><span>Date of Birth<span class="required">*</span></span><input id = "childDOB" type="text" class="input-field" name="field2" value="" /></label>
     <span class="error"> <?php echo $childDOB;?></span>

     <label for="field1"><span>Parent name<span class="required">*</span></span><input id = "parentName"type="text" class="input-field" name="field1" value=" " /></label>
     <span class="error"> <?php echo $parentName;?></span>

     <label for="field1"><span>Parent's Email<span class="required">*</span></span><input id = "parentEmail" type="text" class="input-field" name="field1" value="" /></label>
     <span class="error"> <?php echo $parentEmail;?></span>

     <label><span>Parent's Telephone</span><input type="text" class="tel-number-field" name="tel_no_1" value="" maxlength="4" >-<input type="text" class="tel-number-field" name="tel_no_2" value="" maxlength="4"  />-<input type="text" class="tel-number-field" name="tel_no_3" value="" maxlength="10"/></label>

     <label for="field4"><span>Child's Grade</span><select id = "childGrade" name="field4" class="select-field">
       <option value="General Question">6th grade</option>
       <option value="Advertise">7th grade</option>
       <option value="Partnership">8th grade</option>
     </select></label>
     <span class="error"> <?php echo $childGrade;?></span>

     <br>
     <label for="field5"><span>Camp Duration</span><select id = "campDuration" name="field4" class="select-field">
       <option>1 week</option>
       <option>2 weeks</option>
     </select></label>
     <span class="error"> <?php echo $campDuration;?></span>
     <br>

     <label for="field5"><span>Special Instructions<span class="required">*</span></span><textarea id="special" name="field5" class="textarea-field" placeholder='allergies, medicines etc.'></textarea></label>
     <span class="error"> <?php echo $special;?></span>

     <label><input type="submit" value="Continue"/></label>
   </form>
   </div>


 </body>
 </html>
 <?php
 include 'footer.php'
 ?>
