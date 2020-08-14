<?php 
	if(isset($_REQUEST['submit']))
	{
		$file=$_FILES['file'];
		
		$filename=$_FILES['file']['name'];
		$fileTmpname=$_FILES['file']['tmp_name'];
		$filetype=$_FILES['file']['type'];
		$filesize=$_FILES['file']['size'];
		$fileError=$_FILES['file']['error'];
		
		$fileext=explode('.','$filename');
		$fileActualExt=strtolower(end($fileext));
		
		$allowed=array('jpg','jpeg');
		
		if(in_array($fileActualExt,$allowed))
		{
			#code ...
		
		
	move_uploaded_file($fileTmpname,"upload".$filename);
	 header("location:file.php?msg=uploaded.");
		}
	else
		{
			echo "not upload";
		header("location:file.php?msg=uploaded.");
		}
	
	}
	
	?>