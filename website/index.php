<?php include"header.php";?>
	<?php $time_now=mktime(date('h')+5,date('i')+30,date('s'));
		$date = date('d/m/Y h:i a', $time_now);
	$today = date('d');
	 include "connect.php";
	 $q="select * from thoughts where sno='$today'";
	 
	 $run=mysqli_query($obj,$q);
	
	
	?>
	
<div class="container" style="height:200px;">
<div class="text-center" style="text-align:center; padding-top:100px; font-size-adjust:1.00;" ><h3>THOUGHT OF THE DAY</h3></br></br>
<p style="text-align:center; font-family: 'Merienda'">
<?php
if($row=mysqli_fetch_array($run))
	 
	{
       echo $row['thought']; 
	 }
	?>
</p>
</div>
</div>
<div class="about" id="about">
	<div class="container">
		<div class="about-head text-center" style="padding:40px;">
			<h3>We believe in Quality</h3>
		</div>
<div class="about-top-grids">
			<div class="col-md-3 grid">
				<img src="images/p.png" style="width:45px; height:45px;">
				<h3>Education-key to unlock door of freedom</h3>
			</div>
			<div class="col-md-3 grid" >
				<img src="images/b.png">
				<h3>Education is the passport to the future</h3>
			</div>
			<div class="col-md-3 grid">
				<img src="images/bo.png" style="width:45px; height:45px;">
				<h3>Education is the premise of the progress</h3>
			</div>
			<div class="col-md-3 grid">
			<img src="images/t.png" style="width:66px; height:45px;">
				<h3>Education is the most powerful weapon</h3>
			</div>
			<div class="clearfix"></div>
		</div>
		</div>
		</div>
		<!--<div class="banner-dott1">
		<div class="container" height="960px" width="640px"><img src="images/edit.png" style="font-family: 'Merienda', cursive; color:black;"><p style="font-family: 'Merienda', cursive; color:black;">education is right of every person lives on this earth.</p></div>
	--><div class="container">
	
  <!---<div id="myCarousel" style="width:100%; margin:auto;"  class="carousel slide" data-ride="carousel">
 <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    
    <div class="carousel-inner">
      <div class="item active">
        <img src="images/g9.jpg"  style="align-center; width:auto; height:auto; border-radius:20%"><p>The One Of the Best Institute for learning and exploring.</p>
      </div>
	  
	  
	  
	  

      <div class="item">
        <img src="images/t1.jpg" style="width:auto; height:auto; border-radius:20%">
      </div>
    
      <div class="item">
        <img src= alt="images/t3.jpg" style="width:auto; height:auto; border-radius:20%">
      </div>
    </div>

   
    <a class="left carousel-control" style="height:auto; width:0px; " href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" style="height:auto; width:0px;" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  </div>---><div class="container" style="padding:50px">
  <img src="images/s.jpg" height="100%" width="100%"> 
  </div>
  </div>
<?php include "footer.php"; ?>