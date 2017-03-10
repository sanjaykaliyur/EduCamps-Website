
<?php include 'header.php'; ?>

<div class="container">
        <div class="row">
            <div class="col-lg-12">
                <br> <br>
                <h2 class="page-header" style = "padding-top: 10px;
								">
                    Customer Reviews
                </h2>
                <p>
                Here is what our parents have to say! </p>
                <br>
            </div>
            <hr>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4> <strong>John L. on 2016-11-30</strong></h4>
                    </div>
                    <div class="panel-body">
											<h4>Chemistry</h4>
                        <p>Wow! EduCamps is an absolute MUST for your child! My son, Joseph, came home every day from camp with new stories and an excitement I had never seen in him before. EduCamps is not only a place for learning, it is also a place for kids to grow together and develop a better sense of understanding of the world. Joseph and I both give EduCamps two thumbs up!</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><strong>Lucy J. on 2016-10-24</strong></h4>
                    </div>
                    <div class="panel-body">
											<h4>Water Hockey</h4>
                        <p>What a great experience. My daughter, Jenny, told me all about her time at EduCamps and it is obvious she loved it. She especially loved the staff of EduCamps, as she said they were always enthusiastic and taught her some great camp songs! It is obvious she learned a lot, and she is very proud of the projects she brought home from camp. Thanks EduCamps!</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><strong>Andy R. on 2016-08-15</strong></h4>
                    </div>
                    <div class="panel-body">
											<h4>Ping Pong</h4>
                        <p>My son speaks very highly of EduCamps. He told me that he was very impressed with the staff, and I can proudly say that EduCamps has given my son a new passion. He greatly enjoyed the Web Programming class, and has been creating new web pages ever since he finished camp. He has told me that he plans on pursuing computer science once he reaches college, and I have EduCamps to thank for that.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><strong>Patty M. on 2016-09-10</strong></h4>
                    </div>
                    <div class="panel-body">
											<h4>Chemistry</h4>
                        <p>Wow, wow, wow!! Never have I seen my daughter more excited about anything than the Chemistry class she took with EduCamps. She is already begging me to let her come back and take other classes offered at EduCamps. I have never known my daughter to be extremely excited about learning, but EduCamps has changed that! </p>
                    </div>
                </div>
            </div>
						<?php
							$sql = "SELECT * FROM FORUM;";
							$result = mysqli_query($conn,$sql);
				 			while($row = mysqli_fetch_assoc($result)) {
  							if($row != 0) {
    							echo '<div class="col-md-4">
    	                <div class="panel panel-default">
    	                    <div class="panel-heading">
    	                        <h4><strong>'.$row['Username'].'</strong> on '.$row['entryDate'].'</h4>
    	                    </div>
    	                    <div class="panel-body">
    												<h4> '.$row['campName'].'</h4>
    	                        <p>'.$row['response'].'</p>
    	                    </div>
    	                </div>
    	            </div>';
    						}
              }
						 ?>
        </div>

<div>
            <br>
            <br>
</div>
<?php
if(isset($_SESSION['id'])) {
	echo '<h3> Leave a Review </h3>
  <form method="post" id="forum" style="margin:15px" action = "forum_add.php">
            Camp Name: <br>
						<select name = "campName"required data-validation-required-message="select a camp name">
							<option selected="selected" value="">Camp Name</option>
							<option value="Introduction to Web Programming">Introduction to Web Programming</option>
							<option value="Introduction to Python">Introduction to Python</option>
							<option value="Introduction to Java">Introduction to Java</option>
							<option value="Introduction to Robotics">Introduction to Robotics</option>
							<option value="Electrical Engineering: Circuits">Electrical Engineering: Circuits</option>
							<option value="Electrical Engineering: Logic Design">Electrical Engineering: Logic Design</option>
							<option value="Basketball">Basketball</option>
							<option value="Football">Football</option>
							<option value="Swimming">Swimming</option>
						</select>
						<br><br>
            Comment: <br>

            <textarea rows="8" cols="49" name="comment" required data-validation-required-message="Write a review!"></textarea><br>
            <input type="submit" class="button" style="margin:5px">
</form>
<br>';
}
?>
<?php include 'footer.php' ?>
