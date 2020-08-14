<?php include"header1.php";?>
<?php  
if(!isset($_SESSION['Teacher']) && (!isset($_SESSION['student']))){
	header("location:login.php?msg=You Must login first");
}	
?>
<div class="container" class="table-responsive" style="padding:20px";>
	<table class="table table-striped table-bordered">
		<thead>
		<tr>
			<th>Sr.no</th>
			<th>Subject</th>
			<th>Notes</th>
			<th>uploaded by</th>
			<th>View</th>
			<th>View(new window)</th>
		</tr>
		</thead>
	<tbody>
	<?php 
		$id=1;
		include "connect.php";
		$q="Select * from subjects";
		$run=mysqli_query($obj,$q);
		while($row=mysqli_fetch_array($run))
		{
			echo"<tr>";
				echo"<td>".$id."</td>";
				$id++;
			echo "<td>".$row['subject']."</td>";
			echo "<td>".$row['notes']."</td>";
			echo "<td>".$row['uploadedby']."</td>";
			echo "<td><a target='area' href='data/notes/$row[notes]'>Click Here</a></td>";
			echo "<td><a href='data/notes/$row[notes]'>Click Here</a></td>";
			echo "<tr>";
		}
		?>
	</tbody>
	</table>
		<div class="img-fluid" >
			<iframe  img src="images/g9.jpg" class="col-md-12 img-fluid" name="area" height="500px" width="auto">
				<class="" >
			</iframe>
		</div>
	</div>
<?php include"footer.php";?>