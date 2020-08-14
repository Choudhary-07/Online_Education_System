                    <?php	
		if(isset($_REQUEST['submit']))
		{
			$t=$_REQUEST['name'];
			$q=$_REQUEST['qual'];
			$s=$_REQUEST['sub'];
			$e=$_REQUEST['exp'];
			$em=$_REQUEST['email'];
			$p=$_REQUEST['pass'];
			$ph=$_REQUEST['phone'];
			include"connect.php";
			$q="insert into teachers value('','$t','$q','$s','$e','$em','$p','$ph')";
			$run=mysqli_query($obj,$q);
			if($run>0)
				{
				header("location:Register.php?msg=Registeration Done");
				}
		
			else
			{
			header("location:Register.php?msg=Registeration Done");
			}
		}
		else
		{
			header("location:Register.php?msg=You Must Fill This Form.");
		}
?>