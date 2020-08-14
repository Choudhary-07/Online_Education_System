<?php 
	include"connect.php" ;
	$q="DELETE from query where sno=$_REQUEST[sno]";
	$run=mysqli_query($obj,$q);
		if($run>0){
		header("location:home.php?msg=QUERY DELETED.");
		}
	?>