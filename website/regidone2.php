<?php	
		if(isset($_REQUEST['submit']))
		{
			$students_id=$_REQUEST['name'];
			$email=$_REQUEST['email'];
			$password=$_REQUEST['pass'];
			$phone=$_REQUEST['phone'];
			$course=$_REQUEST['cou'];
			$college=$_REQUEST['coll'];
			include "connect.php";
			$q="insert into students value('','$students_id','$email','$password','$course','$college','$phone')";
			$run=mysqli_query($obj,$q);
			if($run>0)
				{
					
		
				header("location:register1.php?msg=Registration Done");
				}
		
			else
			{
			mysqli_error($obj);
			header("location:register1.php?msg=Registration Not Done");
			}
		}
		else
		{
			header("location:students.php?msg=Please Fill This Form First");
		}
?>