<?php 
	if(isset($_REQUEST['SignIn'])){
		
		$email=$_REQUEST['email'];
		$password=$_REQUEST['password'];
		$obj=mysqli_connect("localhost","root","","admin_panel");
		$q = "select * from `teachers` where `email` ='$email' and `password`='$password';";
		echo $q;
		$res = mysqli_query($obj,$q);
		if($row = mysqli_fetch_array($res)){
			session_start();
			$_SESSION['teacher'] = $email;
			echo "Hello Loged In";
			header("location:userteacher_up.php");
		}
		else{
			header("location:teacher_login.php");
		}
		
	}

?>