<?php
    require 'header.php';
	if(!isset($_SESSION['admin'])){
		header("location:index.php");
	}
   ?> 
<div class="container" style="padding:100px;">
  
  <div class="container" style="padding-left:50px;">
		
			<div class="from-title" style="border:solid 5px;">
				<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
				 <h1 style="text-align:center"><i><b>Information About Academy<b></i></h1>
				</div>
			
	<div class="row">
	<div class="container" style="padding-left:50px;"></div>
	<div class="col-md-4">
			<div class="thumbnail">
				<div class="caption text-center">
                    <a href="teach.php"><img src="address-card-solid.svg"  width="100" height="100"></a>
						<?php
                            include "connect.php";
							$q="select COUNT(sno) as total from teachers";
							$res=mysqli_query($obj,$q);
							$row=mysqli_fetch_assoc($res);
							echo "<h3 style='color:Red' 'text-align:center;'>".$row['total']."</h3>";                                            
						?>
                    <p style="text-align: center;"><a style="color:Red" href="teach.php">Number of Teachers</a></p>
				</div>
			</div>
        </div>
                            <div class="col-md-4">
                                <div class="thumbnail">
                                    <div class="caption text-center">

                                        <a href="students.php"><img src="address-card-solid.svg" align="middle" width="100" height="100"></a>
                                        <?php
                                           include "connect.php";
										   $q="select COUNT(sno) as total from students";
										   $res=mysqli_query($obj,$q);
										   $row=mysqli_fetch_assoc($res);
										   echo "<h3 style=' color :Blue' 'text-align:center;'>".$row['total']."</h3>";
                                        ?>
                                        <p style="text-align: center;"><a style="color:Blue" href="students.php">Number of Students</a></p>

                                    </div>
                                </div>
                            </div>             
		<div class="col-md-4">
			<div class="thumbnail">
				<div class="caption text-center">
					<a href="subjects.php"><img src="address-card-solid.svg" align="middle" width="100" height="100"></a>
                                        <?php
                                           include "connect.php";
										   $q="select COUNT(sno) as total from subjects";
										   $res=mysqli_query($obj,$q);
										   $row=mysqli_fetch_assoc($res);
										   echo "<h3 style=' color :green' 'text-align:center;'>".$row['total']."</h3>";
                                        ?>
                                        <p style= "text-align: center;"><a style="color:Green" href="subjects.php">Number of Subjects</a></p>

				</div>
			</div>
		</diV> 
	</div>
		<div class="row">
			<div class="from-title" style="border-top:solid 5px;">
			  <div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
				<h2 style="text-align:center"><i><b> Queries<b></i></h2>
				
                        <table id="datatable" class="table table-striped table-bordered" style="overflow:auto;" >
                            <thead style="border-top:solid 5px;">
                            <tr>
								<th><h4><b>Sr no.<b></h4></th>
								<th><h4><b>Name</b></h4></th>
                                <th><h4><b>Email</b></h4></th>
                                <th><h4><b>Profession</b></h4></th>
                             <!--   <th><h4><b>College</b></h4></th> -->
                                <th><h4><b>Phone/Mobile No</b><h4></th>
                                <th><h4><b>Query</b><h4></th>
                                <th><h4><b>Date/Time</b><h4></th>
                                <th><h4><b>Response</b><h4></th>
								</tr>
                            </thead>

					<tbody style="border:solid :">
				</div>
				</div>
						<?php 
							$id=1;
								include "connect.php"; 
								$q="select * from query";
								$res=mysqli_query($obj,$q);
								while($row=mysqli_fetch_array($res)){
									
									echo "<tr>";
									echo "<td>".$id."</td>";
									$id++;
									echo "<td>".$row['name']."</td>";
									echo "<td>".$row['email']."</td>";
									echo "<td>".$row['profession']."</td>";
									echo "<td>".$row['phoneno']."</td>";
									echo "<td>".$row['query']."</td>";
									echo "<td>".$row['date/time']."</td>";
									echo "<td><a href='query_del.php?sno=$row[sno]'>Delete</a></td>";
								    echo "</tr>";
								}
						   ?>
							
                            
                            </tbody>
                        </table>
				<form>
		</div>
	</div>
</div>						
</div>										
</div>										
</div>										
<?php
    require 'footer.php';
?>