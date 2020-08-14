<?php include "header.php"; ?>
	<?php
		echo "<a href='index.php'>Logout</a>";
		echo "<a href='stud_up.php'>update</a>";
		echo "<a href='stud_del.php'>Delete</a>";
		
		include "connect.php";
		$q="select * from students where sno='$_REQUEST[sno]'";
		$run=mysqli_query($obj,$q);
		$row=mysqli_fetch_array($run);
		 $n=$row['students_id'];
		 $e=$row['email'];
		 $p=$row['Password'];
		 $c=$row['course'];
		 $co=$row['college'];
		 $ph=$row['Mobile/Phoneno'];
			
		?>
			<div class="Container">
			<div class="col-md-2"></div>
			<div class="mt-2 col-md-10">
			<form  class="form body" action="stud_updb.php" method="post">
			Name<input type="text" class="form-control" name="name" value="<?php echo $n; ?>"/></br>
			Email<input type="email" class="form-control" name="email" value="<?php echo $e; ?>"/></br>
			Password<input type="password" class="form-control" name="pass" value="<?php echo $p; ?>"/></br>
			Course/Year<input type="text" class="form-control" name="cou" value="<?php echo $c; ?>"/></br>
			College<input type="text" class="form-control" name="coll" value="<?php echo $co; ?>"/></br>
			Phone/Mobile no<input type="number_format" class="form-control" name="phone"value="<?php echo $ph; ?>"/></br>
			<button type="submit" class="btn btn-default"  name="save">Update</button>
		</form>
		<div style="height:250px ;widht:100%;padding:20px "></div>
	</div>
	</div
	
		
			<?php include "footer.php"; ?>