<?php
	$email=$_REQUEST['email'];
	include "connect.php";
	$q = "delete from students where sno='$_REQUEST[sno]'";
	$res=mysqli_query($obj,$q);
	if($res>0){
	header("location:students.php?msg=User Deleted");
	}
	else
	{
	echo"error";
	}
?>