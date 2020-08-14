<?php 
   if(isset($_REQUEST['submit']))
   {
	$n=$_REQUEST['name'];
	$e=$_REQUEST['email'];
	$p=$_REQUEST['prof'];
	$ph=$_REQUEST['phone'];
    $q=$_REQUEST['query'];
	$time_now=mktime(date('h')+5,date('i')+30,date('s'));
		$date = date('d/m/Y h:i:s a', $time_now);
	$today = date('d');

	include("connect.php");
	$q="insert into query value ('','$n','$e','$p','$ph','$q','$date')";
	$run=mysqli_query($obj,$q);
	 if($run>0){
	  success;
	  header("location:home.php");
	 }
   
else{
echo mysqli_error($obj);
}
	 }
   
else{
echo mysqli_error($obj);
}	
   ?>