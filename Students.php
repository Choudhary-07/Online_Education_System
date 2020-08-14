

<?php include "header.php"; ?>
<?php 
if(!isset($_SESSION['admin']))
{
	header("location:index.php?msg=You Must login first");
}	
?>
		<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
						<div class="form-title">
							<h4><b><i>Basic Information:</i></b></h4>
						</div>
						<div class="form-body">
							<form action="stud_data.php" method="post"> 
							<div class="form-group"><label for="exampleinputname">Users</label><input type="text" class="form-control" name="name" placeholder="Name"></div>
							<div class="form-group"><label for="exampleInputEmai">Email</label><input type="email" class="form-control" name="email" placeholder="Email"></div> 
							<div class="form-group"><label for="exampleInputPassword">Password</label> <input type="password" class="form-control" name="pass" placeholder="Password"> </div> 
							<div class="form-group"><label for="exampleInputPassword">Course/Year</label> <input type="text" class="form-control" name="cou" placeholder="course"> </div> 
							<div class="form-group"><label for="exampleInputPassword">College</label> <input type="text" class="form-control" name="coll" placeholder="college name"> </div> 
							<div class="form-group"><label for="exampleInputContact">Phone/Mobile No</label> <input type="tel" class="form-control" name="phone" placeholder="Phone"> </div> 
							<button type="submit" name="submit" class="btn btn-default">Submit</button> </form> 
							<div class="row">
							
					</div>
				<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
						<div class="form-title">
							<h4><b><i>Basic Information:</i></b></h4>
						</div>
					
                    <div class="x_content">
                        <p class="text-muted font-13 m-b-30">
                            Below Table show the information about the Students.
                        </p>
                        <table id="datatable" class="table table-striped table-bordered">
                            <thead>
                            <tr>
								<th>Sr no.</th>
								<th>Name</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Course/Year</th>
                                <th>College</th>
                                <th>Phone/Mobile No</th>
                                <th>Update</th>
                                <th>Delete</th>
                            </tr>
                            </thead>


                           <tbody>
						   <?php 
							$id=1;
								$con=mysqli_connect("localhost","root","","admin_panel");
								$q="select * from students";
								$res=mysqli_query($con,$q);
								while($row=mysqli_fetch_array($res)){
									
									echo "<tr>";
									echo "<td>".$id."</td>";
									$id++;
									echo "<td>".$row['students_id']."</td>";
									echo "<td>".$row['email']."</td>";
									echo "<td>".$row['Password']."</td>";
									echo "<td>".$row['course']."</td>";
									echo "<td>".$row['college']."</td>";
									echo "<td>".$row['Mobile/Phoneno']."</td>";
									echo "<td><a href='stud_up.php?sno=$row[sno]'>Update</a></td>";
									
									echo "<td><a href='students_del.php?sno=$row[sno]'>Delete</a></td>";
								    echo "</tr>";
								}
						   ?>
							
                            
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
						</div>
					</div><?php include "footer.php"; ?>