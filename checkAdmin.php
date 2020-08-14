<?php 
	if(isset($_REQUEST['SignIn']))
	{
		
		$email=$_REQUEST['email'];
		$password=$_REQUEST['password'];
		$obj=mysqli_connect("localhost","root","","admin_panel");
		$q = "select * from `admin` where `email` ='$email' and `password`='$password';";
		$res = mysqli_query($obj,$q);
		if($row = mysqli_fetch_array($res)){
			session_start();
			$_SESSION['admin'] = $email;
			echo "Hello Loged In";
			header("location:home.php");
		}
	
		else{
			header("location:index.php");
		}
	}
		?>
		
	 