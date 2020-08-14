<?php 
	include"connect.php";
  $sql="delete from subjects where sno='$_REQUEST[sno]'";
  $run=mysqli_query($obj,$sql);
  if($run>0){
	  echo"success";
	  header("location:subjects.php?msg=DELETION DONE.");
  }
  else
  {
	 echo "unsuccessful";
	 echo mysqli_error($obj);
  }
  ?>