<?php
	if(isset($_REQUEST['submit']))
	{
	$sub=$_REQUEST['sub'];
	$up=$_REQUEST['up'];
	$notes = "";
	if(($_FILES['notes']['error']>0)){}
	else{
		$notes=$_FILES['notes']['name'];
		$n1=$_FILES['notes']['size'];
		$n2=$_FILES['notes']['type'];
		$n3=$_FILES['notes']['tmp_name'];
		move_uploaded_file($n3,"data/notes/".$notes);
		}
		
	$assi = "";
	if(($_FILES['assi']['error']>0)){}
	else{
		$notes=$_FILES['assi']['name'];
		$n1=$_FILES['assi']['size'];
		$n2=$_FILES['assi']['type'];
		$n3=$_FILES['assi']['tmp_name'];
		move_uploaded_file($n3,"data/assi/".$assi);
		}
		
		$quiz = "";
		if(($_FILES['quiz']['error']>0)){}
		else{
			$quiz=$_FILES['quiz']['name'];
			$n1=$_FILES['quiz']['size'];
			$n2=$_FILES['quiz']['type'];
			$n3=$_FILES['quiz']['tmp_name'];
			move_uploaded_file($n3,"data/quiz/".$quiz);
			}

		$pap = "";
		if(($_FILES['pap']['error']>0)){}
			else{
			$pap=$_FILES['pap']['name'];
			$n1=$_FILES['pap']['size'];
			$n2=$_FILES['pap']['type'];
			$n3=$_FILES['pap']['tmp_name'];
			move_uploaded_file($n3,"data/pap/".$pap);
			}
		
		$ppt = "";
		if(($_FILES['ppt']['error']>0)){}
			else{
			$ppt=$_FILES['ppt']['name'];
			$n1=$_FILES['ppt']['size'];
			$n2=$_FILES['ppt']['type'];
			$n3=$_FILES['ppt']['tmp_name'];
			move_uploaded_file($n3,"data/ppt/".$ppt);
			}
		
		$vid = "";
		if(($_FILES['vid']['error']>0)){}
			else{
			$vid=$_FILES['vid']['name'];
			$n1=$_FILES['vid']['size'];
			$n2=$_FILES['vid']['type'];
			$n3=$_FILES['vid']['tmp_name'];
			move_uploaded_file($n3,"data/vid/".$vid);
			}
		include"connect.php";
		$q="insert into subjects values ('','$sub','$notes','$assi','$quiz','$pap','$ppt','$vid','$up')";
		$res=mysqli_query($obj,$q);
		if($res>0)
			{
				header("location:subjects.php?msg=insertion is done");
			}
		else
			{
				echo mysqli_error($obj);
				header("location:subjects.php?msg=insertion is unsuccessful");
			}
	}
 ?>

	
	