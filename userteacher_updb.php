<?php 
$n= $_REQUEST['name'];
$em= $_REQUEST['email'];
$p= $_REQUEST['pass'];
$q= $_REQUEST['qual'];
$s= $_REQUEST['sub'];
$e= $_REQUEST['exp'];
$ph= $_REQUEST['phone'];
include "connect.php";
$q = "UPDATE teachers SET name='$n',qualification='$q',subject='$s',experience='$e',password='$p',`phone/mobile no`='$ph' where email='$em'";
$res  = mysqli_query($obj,$q);
if($res>0)
	{
		echo "update"; 
		header("location:userteacher_up.php");
	}
	echo mysqli_error($obj);
	?>