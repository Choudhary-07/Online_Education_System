<?php include "header3.php"; ?>
			
			<div class="Container" style="padding:70px">
				<div class="col-md-2"></div>
			
				<div class="mt-2 col-md-10">
				<form  class="form body" action="updatestuddb.php" method="post">
				<?php 
				include "connect.php";
					$q="select * from students where email='$_SESSION[student]'";
					$res=mysqli_query($obj,$q);
					if($row=mysqli_fetch_array($res)){				?>
				Name<input type="text" class="form-control" name="name" value="<?php echo $row['students_id'];?>"/></br>
				Email<input type="email" class="form-control" name="email" value="<?php echo $row['email'];?>"></br>
				Password<input type="password" class="form-control" name="pass" value="<?php echo $row['Password'];?>"></br>
				Course/Year<input type="text" class="form-control" name="cou" value="<?php echo $row['course'];?>"></br>
				College<input type="text" class="form-control" name="coll" value="<?php echo $row['college'];?>"></br>
				Phone/Mobile no<input type="number_format" class="form-control" name="phone" value="<?php echo $row['Mobile/Phoneno'];?>"></br>
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
	
		
			