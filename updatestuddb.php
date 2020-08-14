<?php 
$n= $_REQUEST['name'];
$e= $_REQUEST['email'];
$p= $_REQUEST['pass'];
$c= $_REQUEST['cou'];
$co= $_REQUEST['coll'];
$ph= $_REQUEST['phone'];

include "connect.php";
session_start();
$q = "UPDATE students SET students_id='$n',Password='$p',course='$c',college='$co',`Mobile/Phoneno`='$ph' where email='$_SESSION[student]'";
$res  = mysqli_query($obj,$q);
if($res>0)
	{
		echo "update";
		header("location:updatestud.php?DATA UPDATED");
	}
else
	{
		echo mysqli_error($obj);
	}
	?>