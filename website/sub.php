<?php 
	if(isset($_REQUEST['sub']))
	{
	 $e=$_REQUEST['email'];
	 
	 include "connect.php";
	 $q="insert into subscribe values('','$e')";
			$run=mysqli_query($obj,$q);
			if($run>0)
				{
					
			
				header("location:home.php");
				}
		
			else
			{
				echo mysqli_error($obj);
			echo"unsuccessful";
			}
	}
	else
			{
			 echo"unsuccessful";
			 header('location:home.php?msg=Unsuccesful Subscription.');
			}
	
?>