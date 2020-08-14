	<?php	$email=$_REQUEST['email'];
		$password=$_REQUEST['password'];

		include("connect.php");
		$q="select * from admin where email='$email' and password='$password'";
		$run=mysqli_query($obj,$q);
		
		if($row=mysqli_fetch_array($run))
			{
				echo"heloo";
				$_SESSION['email']=$email;
				header("location:home.php");
			}
		else
			{
				header("location:index.php?log in unsuccessfull");
			} ?>