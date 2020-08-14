<?php include"header.php";?>
	<?php $time_now=mktime(date('h')+5,date('i')+30,date('s'));
		$date = date('d/m/Y h:i a', $time_now);
	$today = date('d');
	 include "connect.php";
	 $q="select * from thoughts where day='$today'";
	 $run=mysqli_query($obj,$q);
	
	
	?>
	
<div class="container" style="height:200px;">
<div class="text-center" style="text-align:center">Thoughts<p style="text-align:center"><?php
if($row=mysqli_fetch_array($run))
	 
	{ echo $row['thoughts']; }?>"</p>
</div>
</div><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<div class="container">
 <div id="myCarousel" style="width:50%;" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
  <!--  <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>


    <div class="carousel-inner">
      <div class="item active">
        <img src="images/g9.jpg" alt="Los Angeles" style="width:auto; height:auto; border-radius:20%"><p>The One Of the Best Institute for learning and exploring.</p>
      </div>

      <div class="item">
        <img src="images/t1.jpg" alt="hoshiarpur" style="width:auto; height:auto">
      </div>
    
      <div class="item">
        <img src= alt="New york" style="width:100%;">
      </div>
    </div>

   
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span> 
    </a>
  </div>
</div>--->
<?php include "footer.php"; ?>