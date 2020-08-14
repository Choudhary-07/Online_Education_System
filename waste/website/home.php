<?php include"header.php";?>		<div class="row">
	<div class="md-sm-4">
	<?php $time_now=mktime(date('h')+5,date('i')+30,date('s'));
		$date = date('m/d/Y h:i:s a', $time_now);
	$today = date('d');
	 include "connect.php";
	 $q="Select * from thoughts where sno='$today'";
	 $run=mysqli_query($obj,$q);
	
	if($row=mysqli_fetch_array($run))
	{
		
		
	
	
	?>
	<div class="row">
	<div class="md-sm-6">
 Date<input type="text" value="<?php echo $date ;?>">
 Thoughts<input type="text" value="<?php echo $row['thoughts'];?>">
	</div>
	</div>
	</div>
	</div>
	<?php } ?>
<!--Slideshow container-->
  <div class="slideshow-container">
		<div class="myslides fade">
			<div class="numbertext">1/3</div>
			<img src="m1.jpg" style="width:100%">
				<div class="text">Image 1</div>
		</div>
		<div class="myslides fade">
			<div class="numbertext">2/3</div>
			<img src="m2.jpg" style="width:100%">
				<div class="text">Image 2</div>
		</div>		
		<div class="myslides fade">
			<div class="numbertext">3/3</div>
			<img src="m3.jpg" style="width:100%">
			<div class="text">Image 3</div>		
		</div>
<!--NEXT and PREVIOUS button-->
	<a class="prev" onclick="pluSlides(-1)">&#10094;</a>
	<a class="next" onclick="pluSlides(1)">&#10095;</a>
  </div>
<!--dot circles--->
<div style="text-align:center">
	<span class="dot" onclick="currentslide(1)"></span>
	<span class="dot" onclick="currentslide(2)"></span>
	<span class="dot" onclick="currentslide(3)"></span>
</div>
<?php include "footer.php"; ?>