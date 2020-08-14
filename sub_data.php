<?php session_start();
	if(isset($_REQUEST['submit']))
	{
	$sub=$_REQUEST['sub'];
	$up= $_SESSION['teacher'];
	$File = $_FILES['notes'];
		$notes=$_FILES['notes']['name'];
		$n1=$_FILES['notes']['size'];
		$n2=$_FILES['notes']['type'];
		$fileError=$_FILES['notes']['error'];
		$n3=$_FILES['notes']['tmp_name'];
		
		$fileExt = explode('.',$notes);
		$fileActualext = strtolower(end($fileExt));
		
		$allowed=array('docx','doc','pdf','xml','txt','ppt');
		if(in_array($fileActualext,$allowed)){
			if($fileError===0){
				
			}
		  move_uploaded_file($n3,"website/data/notes/".$notes);
		}
			else{
				$notes="";
				echo "error In Notes";
			}
	
			
	}
	$assi = "";
	if(($_FILES['assi'])) {
	}else{
		$name=$_FILES['assi']['name'];
		$n1=$_FILES['assi']['size'];
		$n2=$_FILES['assi']['type'];
		$fileError=$_FILES['assi']['error'];
		$n3=$_FILES['assi']['tmp_name'];
		
		$fileExt = explode('.',$name);
		$fileActualext = strtolower(end($fileExt));
		
		
		$allowed=array('docx','doc','pdf','xml','txt');
		if(in_array($fileActualext,$allowed))
			{
				if($fileError===0)
					{
					move_uploaded_file($n3,"website/data/assi/".$assi);
					}
			}
			else
				{
				echo "error";
				}
		}
		$quiz = "";
		if(($_FILES['quiz']))
		{
			$quiz=$_FILES['quiz']['name'];
			$n1=$_FILES['quiz']['size'];
			$n2=$_FILES['quiz']['type'];
			$fileError=$_FILES['quiz']['error'];
			$n3=$_FILES['quiz']['tmp_name'];
			
			$fileExt = explode('.',$quiz);
			$fileActualext = strtolower(end($fileExt));
		
		
			
			$allowed=array('docx','doc','pdf','xml','txt');
			if(in_array($fileActualext,$allowed))
			{
			if($fileError===0)
				{
				move_uploaded_file($n3,"website/data/quiz/".$quiz);
				}
			}
			else
			{
				echo "error";
			}
		}

		$pap = "";
		if(($_FILES['pap']))
		{
			$pap=$_FILES['pap']['name'];
			$n1=$_FILES['pap']['size'];
			$n2=$_FILES['pap']['type'];
			$fileError=$_FILES['pap']['error'];
			$n3=$_FILES['pap']['tmp_name'];
			$fileExt = explode('.',$pap);
			$fileActualext = strtolower(end($fileExt));
		
		
			
			$allowed=array('docx','doc','pdf','xml','txt');
			if(in_array($fileActualext,$allowed))
			{ 
				if($fileError===0)
				{
				move_uploaded_file($n3,"website/data/pap/".$pap);
				}
			}
			else
			{
				echo "error";
			}
		}
			
		
		$ppt = "";
		if(($_FILES['ppt']))
		{
			$ppt=$_FILES['ppt']['name'];
			$n1=$_FILES['ppt']['size'];
			$n2=$_FILES['ppt']['type'];
			$fileError=$_FILES['ppt']['error'];
			$n3=$_FILES['ppt']['tmp_name'];
			$fileExt = explode('.',$ppt);
			$fileActualext = strtolower(end($fileExt));
		
		
			
			$allowed=array('ppt','pptx');
			if(in_array($fileActualext,$allowed))
			{
				if($fileError===0)
				{
					move_uploaded_file($n3,"website/data/ppt/".$ppt);
				}	
			}
		else
			{
				echo "error";
			}
		}
		$vid = "";
		if(($_FILES['vid']))
		{
			$vid=$_FILES['vid']['name'];
			$n1=$_FILES['vid']['size'];
			$n2=$_FILES['vid']['type'];
			$fileError=$_FILES['vid']['error'];
			$n3=$_FILES['vid']['tmp_name'];
		
			$fileExt = explode('.',$vid);
			$fileActualext = strtolower(end($fileExt));
		
		
			
			$allowed=array('mp4','3gpp','mpeg','mkv');
			if(in_array($fileActualext,$allowed))
			{
				if($fileError===0)
				{
					move_uploaded_file($n3,"website/data/vid/".$vid);
				}
			}
			else
			{
				echo "error";
			}
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
	
 ?>

	
