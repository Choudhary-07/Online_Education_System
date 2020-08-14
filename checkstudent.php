<?php 
	if(isset($_REQUEST['SignIn'])){
		
		$email=$_REQUEST['email'];
		$password=$_REQUEST['password'];
		$obj=mysqli_connect("localhost","root","","admin_panel");
		$q = "select * from `students` where `email` ='$email' and `password`='$password';";
		echo $q;
		$res = mysqli_query($obj,$q);
		if($row = mysqli_fetch_array($res)){
			session_start();
			$_SESSION['student'] = $email;
			echo "Hello Loged In";
			header("location:updatestud.php");
		}
		else{
			header("location:student_login.php");
		}
		
	}

?>