<?php include"header.php"; ?>	
<?php
		
		echo "<a href='index.php'>Logout</a>";
		echo "<a href='teach_up.php'>update</a>";
		echo "<a href='teach_del.php'>Delete</a>";
		
		include "connect.php";
		$q="select * from teachers where sno='$_REQUEST[sno]'";
		$run=mysqli_query($obj,$q);
		$row=mysqli_fetch_array($run);
		 $n=$row['name'];
		 $q=$row['qualification'];
		 $s=$row['subject'];
		 $e=$row['experience'];
		 $em=$row['email'];
		 $p=$row['password'];
		 $ph=$row['phone/mobile no'];
			
		?>
			<div class="Container">
			<div class="col-md-2"></div>
			<div class="mt-2 col-md-10">
			<form  class="form body" action="teach_updb.php" method="post">
			Name<input type="text" class="form-control" name="name" value="<?php echo $n; ?>"/></br>
			Qualification<input type="text" class="form-control" name="qual" value="<?php echo $q; ?>"/></br>
			Subject<input type="text" class="form-control" name="sub" value="<?php echo $s; ?>"/></br>
			Experience<input type="text" class="form-control" name="exp" value="<?php echo $e; ?>"/></br>
			Email<input type="email" class="form-control" name="email" value="<?php echo $em; ?>"/></br>
			Password<input type="password" class="form-control" name="pass" value="<?php echo $p; ?>"/></br>
			Phone/Mobile no<input type="number_format" class="form-control" name="phone"value="<?php echo $ph; ?>"/></br>
			<button type="submit" class="btn btn-default"  name="save">Update</button>
		</form>
		<div style="height:100px ;widht:100%;"></div>
	</div>
	</div
	
		
			<?php include "footer.php"; ?>