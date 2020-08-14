<?php
	
	$s=$_REQUEST['sub'];

	$n="";
	if($_FILES['notes']['error']>0){
		$n = $_REQUEST['notesold'];
	}
	else{
		$n = $_FILES['notes']['name'];

		$nt = $_FILES['notes']['tmp_name'];
		move_uploaded_file($nt,"website/data/notes/".$n);
	}
	
	$a="";
	if($_FILES['assi']['error']>0){
		$a = $_REQUEST['assiold'];
	}
	else{
		$a = $_FILES['assi']['name'];
		$at = $_FILES['assi']['tmp_name'];
		move_uploaded_file($at,"website/data/assi/".$a);
	}
	
	$q="";
	if($_FILES['quiz']['error']>0){
		$q = $_REQUEST['quizold'];
	}
	else{
		$q = $_FILES['quiz']['name'];
		$qt = $_FILES['quiz']['tmp_name'];
		move_uploaded_file($qt,"website/data/quiz/".$q);
	}
	
	$qp="";
	if($_FILES['pap']['error']>0){
		$q1 = $_REQUEST['papold'];
	}
	else{
		$qp = $_FILES['pap']['name'];
		$qpt = $_FILES['pap']['tmp_name'];
		move_uploaded_file($qp,"website/data/pap/".$qp);
	}
	
	$p="";
	if($_FILES['ppt']['error']>0){
		$p = $_REQUEST['pptold'];
	}
	else{
		$p = $_FILES['ppt']['name'];
		$pt = $_FILES['ppt']['tmp_name'];
		move_uploaded_file($pt,"website/data/ppt/".$p);
	}
	
	$v="";
	if($_FILES['vid']['error']>0){
		$v = $_REQUEST['vidold'];
	}
	else{
		$v = $_FILES['vid']['name'];
		$vt = $_FILES['vid']['tmp_name'];
		move_uploaded_file($vt,"website/data/vid/".$v);
	}
	
	include "connect.php";
	$q="UPDATE subjects SET subject='$s',notes='$n',assignments='$a',quizz='$q',`question paper`='$qp',ppt='$p',video='$v' where sno='$_REQUEST[sno]'";
	$run=mysqli_query($obj,$q);
	if($run>0){
		echo "success";
		header('location:subjects.php?msg=Files Uploaded.');
	}
	else
	{
		echo"unsuccessfull";
		echo mysqli_error($obj);
	}
	?>