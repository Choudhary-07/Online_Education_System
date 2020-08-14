<?php session_start();
	
?>
	
<?php	include "header2.php";
?>
<div  style="background-image:url('images/image1.jpg'); height:auto width:auto; background-repeat:no-repeat;background-size:100% 100%; " >
<div class="container" style="padding-top:40px;"></div>
	<div id="page-wrapper" style="margin:auto;">
	   <div class="container" >
			<div class="main-page login-page" style="width:500px; height:476px;">
				<h2 class="title1" style="font-family: 'Merienda', cursive;">Login</h2>
				<div class="widget-shadow">
					<div class="login-body" style="background-image:url('images/image1.jpg'); height:auto width:auto; background-repeat:no-repeat;background-size:100% 100%;">
						<form action="checkAdmin.php" method="post" >
							<input type="email" class="user" name="email" placeholder="Enter Your Email" required="">
							<input type="password" name="password" class="lock" placeholder="Password" required="">
							
							<input type="submit" style="text-align:center; font-family: 'Merienda', cursive; color:white;" name="SignIn" value="Sign In">
							<div class="row" style="margin-top:30px;">
							<div class="col-md-4"><a href="index.php"  style="text-align:center; font-family: 'Merienda', cursive; color:white;" ><img src="user-tie-solid.svg" style="margin-right:5px; image-color:white; height:18px" >Admin</a></div>
							<div class="col-md-4"><a href="teacher_login.php"   style="text-align:center; font-family: 'Merienda', cursive; color:white;" ><img src="chalkboard-teacher-solid.svg" style="margin-right:5px; height:18px" >Teacher</a></div>
							<div class="col-md-4"><a href="student_login.php"  style="text-align:center; font-family: 'Merienda', cursive; color:white;" ><img src="user-graduate-solid.svg" style="margin-right:5px; height:18px" >Student</a></div>
							</div>	
						</div>
						</form>
					</div>
				</div>
				
			</div>
	</div>

	<div class="container" style="height:100px">
	</div>
		<p style="text-align:center; font-family: 'Merienda', cursive; color:white;">&copy;Edu Academy | All Rights Reserved | 2018</p>
			</div>