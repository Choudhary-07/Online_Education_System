<?php session_start();?>
<?php 
	if(isset($_REQUEST['submit'])){
		
		$email=$_REQUEST['email'];
		$password=$_REQUEST['pass'];
		$obj=mysqli_connect("localhost","root","","admin_panel");
		$q = "select * from `teachers` where `email` ='$email' and `password`='$password';";
		echo $q;
		$res = mysqli_query($obj,$q);
		if($row = mysqli_fetch_array($res)){
			session_start();
			$_SESSION['Teacher'] = $email;
			echo "Hello Loged In";
			header("location:home.php?msg=Login Successful");
		}
		else{
			$q = "select * from `students` where `email` ='$email' and `Password`='$password';";
			echo $q;
			$res = mysqli_query($obj,$q);
			if($row = mysqli_fetch_array($res)){
				session_start();
				$_SESSION['student'] = $email;
				echo "Hello Loged In";
				header("location:index.php?msg=Login Successful");
			}
			else{
				header
				("location:login.php?msg=Login Unsuccessful.");
			}
		}
		
	}
	else {
			header
			("location:login.php?msg=You Must Login First.");

		}

?>