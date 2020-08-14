include"connect.php";
		$q="insert into subjects values ('','$notes','assi','$quiz','$pap','$ppt','$vid')";
		$res=mysqli_query($obj,$q);
		if($res>0)
		{
			move_uploaded_file($n3,"data/notes/".$notes);
		 header("location:service.php?msg=insertion is done");
		 }
		 else{
			echo mysqli_error($obj);
		 }
		   }