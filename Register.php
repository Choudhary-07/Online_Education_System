<?php 
 include "header1.php"; ?>
		<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
						<div class="form-title">
							<h4><b><i>Basic Information:</i></b></h4>
						</div>
						<div class="form-body">
							<form action="teach_data.php" method="post"> 
							<div class="form-group">Name<input type="text" name="name" class="form-control" placeholder="Name"></div>
							<div class="form-group">Qualification<input type="text" name="qual" class="form-control"  placeholder="Qualification"></div>
							<div class="form-group">Subject<input type="text" class="form-control" name="sub"placeholder="Subject"></div>
							<div class="form-group">Experience<input type="text" class="form-control" name="exp" placeholder="Experience"></div>
							<div class="form-group">Email<input type="email" name="email" class="form-control" placeholder="Email"></div> 
							<div class="form-group">Password<input type="password" name="pass"class="form-control"  placeholder="Password"> </div> 
							<div class="form-group">Phone/Mobile No<input type="tel" name="phone" class="form-control" placeholder="Phoneno"> </div> 
							<button type="submit" name="submit" class="btn btn-danger">Submit</button> </form> 
							<div class="row">
							
					</div>
				<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
						<div class="form-title">
							<h4><b><i>Basic Information:</i></b></h4>
						</div>
					
                    <div class="x_content">
                        <p class="text-muted font-13 m-b-30">
                            Below Table show the information about the Teachers.
                        </p>
                        <table id="datatable" class="table table-striped table-bordered">
                            <thead>
                            <tr>
								<th>Sr no</th>
								<th>Name</th>
                                <th>Qualification</th>
                                <th>Subject</th>
                                <th>Experience</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Phone/Mobile No</th>
                                <th>Update</th>
                                <th>Delete</th>
                            </tr>
                            </thead>


                            <tbody>
							<?php 
							$id=1;
								$con=mysqli_connect("localhost","root","","admin_panel");
								$q="select * from teachers";
								$res=mysqli_query($con,$q);
								while($row=mysqli_fetch_array($res)){
									
									echo "<tr>";
									echo "<td>".$id."</td>";
									$id++;
									echo "<td>".$row['name']."</td>";
									echo "<td>".$row['qualification']."</td>";
								
									echo "<td>".$row['subject']."</td>";
									echo "<td>".$row['experience']."</td>";
									echo "<td>".$row['email']."</td>";
									echo "<td>".$row['password']."</td>";
									echo "<td>".$row['phone/mobile no']."</td>";
									echo "<td><a href='teach_up.php?sno=$row[sno]'>Update</a></td>";
									
									echo "<td><a href='teach_del.php?sno=$row[sno]'>Delete</a></td>";
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
					</div>
<?php include "footer.php"; ?>