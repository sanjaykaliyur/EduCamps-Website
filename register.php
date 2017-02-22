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
 <!DOCTYPE html>
 <html lang="en">
 <head>
   <title>EduCamps</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <link rel="stylesheet" type="text/css" href="style.css">

 </head>
 <body>

 <nav class="navbar navbar-default">
   <div class="container-fluid">
     <div class="navbar-header">
       <a class="navbar-brand" href="index.html">EduCamps</a>
     </div>
     <ul class="nav navbar-nav">
       <li><a href="index.html">Home</a></li>
       <li class="active"><a href="#">Schedule/Registration</a></li>
       <li><a href="#">Catalogue</a></li>
       <li><a href="#">Forum</a></li>
       <li><a href="#">Visuals</a></li>
       <li><a href="#">More Info</a></li>
     </ul>
   </div>
 </nav>


 <div class="form-style-2">
 <div class="form-style-2-heading">Register your Child for $499</div>
 <form action="pay.html" method="post">
   <label for="field1"><span>Child name<span class="required">*</span></span><input id = "childName" type="text" class="input-field" name="field1" value="" /></label>
   <span class="error">* <?php echo $childName;?></span>
   <label for="field2"><span>Date of Birth<span class="required">*</span></span><input id = "childDOB" type="text" class="input-field" name="field2" value="" /></label>
   <span class="error">* <?php echo $childDOB;?></span>
   <label for="field1"><span>Parent name<span class="required">*</span></span><input id = "parentName"type="text" class="input-field" name="field1" value="" /></label>
   <span class="error">* <?php echo $parentName;?></span>
   <label for="field1"><span>Parent's Email<span class="required">*</span></span><input id = "parentEmail" type="text" class="input-field" name="field1" value="" /></label>
   <span class="error">* <?php echo $parentEmail;?></span>
   <label><span>Parent's Telephone</span><input type="text" class="tel-number-field" name="tel_no_1" value="" maxlength="4" />-<input type="text" class="tel-number-field" name="tel_no_2" value="" maxlength="4"  />-<input type="text" class="tel-number-field" name="tel_no_3" value="" maxlength="10"/></label>
   <label for="fild4"><span>Child's Grade</span><select id = "childGrade" name="field4" class="select-field">
     <option value="General Question">6th grade</option>
     <option value="Advertise">7th grade</option>
     <option value="Partnership">8th grade</option>
   </select></label>
   <br>
   <label for="field4"><span>Camp Duration</span><select id = "campDuration" name="field4" class="select-field">
     <option>1 week</option>
     <option>2 weeks</option>
   </select></label>
   <br>

   <label for="field5"><span>Special Instructions<span class="required">*</span></span><textarea id="special" name="field5" class="textarea-field" placeholder='allergies, medicines etc.'></textarea></label>

   <label><input type="submit" value="Continue" /></label>
 </form>
 </div>


 </body>
 </html>
