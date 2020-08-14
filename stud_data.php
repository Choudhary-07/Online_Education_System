<?php session_start() ?>
<?php	
		if(isset($_REQUEST['submit']))
		{
			$students_id=$_REQUEST['name'];
			$email=$_REQUEST['email'];
			$password=$_REQUEST['pass'];
			$course=$_REQUEST['cou'];
			$college=$_REQUEST['coll'];
			$phone=$_REQUEST['phone'];
			
			include "connect.php";
			$q="insert into students value('','$students_id','$email','$password','$course','$college','$phone')";
			$run=mysqli_query($obj,$q);
			if($run>0)
				{
					
				echo"success";
				header("location:students.php");
				}
		
			else
			{
				echo mysqli_error($obj);
			echo"unsuccessful";
			}
		}
		else
		{
			header("location:students.php");
		}
?>