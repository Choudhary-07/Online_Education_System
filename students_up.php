<?php session_start()
	include"header.php"; ?>

		<?php
		echo "Welocme Mr.?Ms.".$_SESSION['email'];
		echo "<a href='logout.php'>Logout</a>";
		echo "<a href='modify.php'>update</a>";
		echo "<a href='delete.php'>Delete</a>";
		
		$email=$_SESSION['email'];
		include "details.php";
		$q="select * from detail where email='$email'";
		$run=mysqli_query($obj,$q);
		$row=mysqli_fetch_array($run);
		 $n=$row['name'];
		 $e=$row['email'];
		 $p=$row['pass'];
		 $c=$row['cou'];
		 $co=$row['coll'];
		 $ph=$row['phone/mobile no'];
			
		?>
			<form action="stud_updb.php" method="post">
			name<input type="text" name="name" value="<?php echo $n; ?>"/></br>
			email<input type="email" name="email" value="<?php echo $e; ?>"/></br>
			password<input type="password" name="pass" value="<?php echo $p; ?>"/></br>
			course<input type="text" name="cou" value="<?php echo $c; ?>"/></br>
			college<input type="text" name="coll" value="<?php echo $co; ?>"/></br>
			phone/mobile no<input type="number_format" name="phone"value="<?php echo $ph; ?>"/></br>
			<input type="submit" name="save" />
		</form>
	<? include "footer.php"; ?>