<?php include "header1.php"; ?>
<div class="courses">
		<div class="container">
			<h5 class="main-w3l-title">Teachers</h5>
			<div class="col-md-4 courses-info">
				<h5>Physics</h5>
				<div class="c-image">
					<img src="images/t1.jpg" alt=" " class="img-responsive">
					<h6><?php 
					$subject='physics';
					include "connect.php";
					$q="Select * from teachers where subject='$subject'";
					$run=mysqli_query($obj,$q);
					while($row=mysqli_fetch_array($run)){ echo $row['name']; ?></h6>
					<div class="clearfix"></div>
				</div>
					<p class="numbers"><span>30</span>students</p>
					<p class="paragraph-agileinfo"><h4>Qualification </h4><?php echo $row['qualification'];} ?></p>
				<p class="batch">Experience<span>8 years</span></p>
			</div><div class="col-md-4 courses-info">
				<h5>Computer Networks</h5>
				<div class="c-image">
					<img src="images/t1.jpg" alt=" " class="img-responsive">
					<h6><?php 
					$subject='computer networks';
					include "connect.php";
					$q="Select * from teachers where subject='$subject'";
					$run=mysqli_query($obj,$q);
					while($row=mysqli_fetch_array($run)){ echo $row['name']; ?></h6>
					<div class="clearfix"></div>
				</div>
					<p class="numbers"><span>30</span>students</p>
					<p class="paragraph-agileinfo"><h4>Qualification </h4><?php echo $row['qualification']; }?></p>
				<p class="batch">Experience<span>8 years</span></p>
			</div><div class="col-md-4 courses-info">
				<h5>PHP</h5>
				<div class="c-image">
					<img src="images/t1.jpg" alt=" " class="img-responsive">
					<h6><?php 
					$subject='php';
					include "connect.php";
					$q="Select * from teachers where subject='$subject'";
					$run=mysqli_query($obj,$q);
					while($row=mysqli_fetch_array($run)){ echo $row['name']; ?></h6>
					<div class="clearfix"></div>
				</div>
					<p class="numbers"><span>30</span>students</p>
					<p class="paragraph-agileinfo"><h4>Qualification </h4>
					<p><?php echo $row['qualification']; }?></p>
				<p class="batch">Experience<span>8 years</span></p>
			</div>
		
			<div class="col-md-4 courses-info">
				<h5>Java</h5>
				<div class="c-image">
					<img src="images/t2.jpg" alt=" " class="img-responsive">
					<h6>Trainer Name</h6>
					<div class="clearfix"></div>
				</div>
				<p class="numbers"><span>40</span> Students</p>
				<p class="paragraph-agileinfo">Proin iaculis purus consequat sem cure digni ssim. Donec porttitora entum suscipit aenean rhoncus posuere odio in tincidunt.</p>
				<p class="batch">Batch Starts from <span>1 Jan 2018</span></p>
			</div>
			<div class="col-md-4 courses-info">
				<h5>Web Technologies</h5>
				<div class="c-image">
					<img src="images/t3.jpg" alt=" " class="img-responsive">
					<h6>Trainer Name</h6>
					<div class="clearfix"></div>
				</div>
				<p class="numbers"><span>20</span> Students</p>
				<p class="paragraph-agileinfo">Proin iaculis purus consequat sem cure digni ssim. Donec porttitora entum suscipit aenean rhoncus posuere odio in tincidunt.</p>
				<p class="batch">Batch Starts from <span>20 Jan 2018</span></p>
			</div>
				
			<div class="col-md-4 courses-info" ">
				<h5>Cloud Computing</h5>
				<div class="c-image">
					<img src="images/t3.jpg" alt=" " class="img-responsive">
					<h6>Trainer Name</h6>
					<div class="clearfix"></div>
				</div>
				<p class="numbers"><span>20</span> Students</p>
				<p class="paragraph-agileinfo">Proin iaculis purus consequat sem cure digni ssim. Donec porttitora entum suscipit aenean rhoncus posuere odio in tincidunt.</p>
				<p class="batch">Batch Starts from <span>20 Jan 2018</span></p>
			</div>
		</div>
	</div>
	<!--// Services-Inner -->
	
<?php include "footer.php"; ?>
