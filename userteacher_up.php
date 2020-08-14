<?php include "header1.php"; ?>
			
			<div class="Container" style="padding:70px">
				<div class="col-md-2"></div>
			
				<div class="mt-2 col-md-10">
				<form  class="form body" action="userteacher_updb.php" method="post">
				<?php 
				include "connect.php";
					$q="select * from teachers where email='$_SESSION[teacher]'";
					$res=mysqli_query($obj,$q);
					if($row=mysqli_fetch_array($res)){				?>
				Name<input type="text" class="form-control" name="name" value="<?php echo $row['name'];?>"/></br>
				Qualification<input type="text" class="form-control" name="qual" value="<?php echo $row['qualification'];?>"/></br>
				Subject<input type="text" class="form-control" name="sub" value="<?php echo $row['subject'];?>"/></br>
				Experience<input type="text" class="form-control" name="exp" value="<?php echo $row['experience'];?>"/></br>
				Email<input type="email" class="form-control" name="email" value="<?php echo $row['email'];?>"></br>
				Password<input type="password" class="form-control" name="pass" value="<?php echo $row['password'];?>"></br>
				Phone/Mobile no<input type="number_format" class="form-control" name="phone" value="<?php echo $row['phone/mobile no'];?>"></br>
				<?php }
					else{
						echo "error".mysqli_error($obj);
					}
				?>
			<button type="submit" class="btn btn-default"  name="save">Update</button>
		</form>
		<div style="height:250px ;widht:100%;padding:20px "></div>
		<?php include "footer.php"; ?>
	</div>
	</div
	
		
			