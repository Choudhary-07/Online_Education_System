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
			<th>Video</th>
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
			echo "<td>".$row['video']."</td>";
			echo "<td>".$row['uploadedby']."</td>";
			echo "<td><a target='area' href='data/vid/$row[video]'>Click here</a></td>";
			echo "<td><a href='data/vid/$row[video]'>Click here</a></td>";
			echo "<tr>";
		}
		echo ($q);
		?>
	</tbody>
	</table>
	
		<div class="video_player_box">
			<iframe  style="overflow:hidden margin-left:auto; padding:0px; border:2px solid black; margin-right:auto; allowfullscreen:allowfullscreen" img src="images/s.jpg"  class="col-md-12" name="area" height="660px" video id="video" width="300" height="200" controls>
				<img src="images/g9.jpg">
			</iframe>
			

		</div>
		</div>
		
<?php include"footer.php";?>
