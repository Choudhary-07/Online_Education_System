<?php include "header.php"; ?>
<?php 
if(!isset($_SESSION['admin']) && (!isset($_SESSION['teacher'])))
{
	header("location:index.php?msg=You Must login first");
}	
?>

		<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
						<div class="form-title">
							<h4><b><i>Subjects Data</i></b></h4>
						</div>
						<div class="form-body">
							<form action="sub_data.php" method="post" enctype="multipart/form-data"> 
							<div class="form-group">Subject<input type="text" class="form-control" name="sub" required="required" placeholder="Subject Name"></div>
							<div class="form-group">Notes<input type="file" name="notes"></div>
							<div class="form-group">Assigments<input type="file" name="assi"></div>	
							<div class="form-group">Quiz<input type="file" name="quiz"></div> 
							<div class="form-group">Question Papers<input type="file" name="pap"> </div> 
							<div class="form-group">PPT<input type="file" name="ppt"></div>
							<div class="form-group">Video<input type="file" name="vid"> </div> 
						<!--	<div class="form-group">Uploaded By:-<input type="email" name="up" required="required" class="form-control"  placeholder="Uploaded By"> </div> 
					-->		<button type="submit" name="submit" class="btn btn-default">Upload</button> </form> 
							<div class="row">
							
					</div>
				<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
						<div class="form-title">
							<h4><b><i>Subjects Data</i></b></h4>
						</div>
					
                    <div class="x_content" style="overflow:auto;">
                        <p class="text-muted font-13 m-b-30">
                            Below Table show the information about the Subjects.
                        </p>
                        <table id="datatable" class="table table-striped table-bordered" >
                            <thead>
                            <tr>
								<th>Sr no</th>
								<th>Subject</th>
                                <th>Notes</th>
                                <th>Assigments</th>
                                <th>Quiz</th>
                                <th>Question Papers</th>
                                <th>PPT</th>
                                <th>Videos</th>
                             <th>Uploaded By</th> 
                                 <th>Update</th>
                                <th>Delete</th>
                            </tr>
                            </thead>


                            <tbody>
							  <?php 
							$id=1;
								$con=mysqli_connect("localhost","root","","admin_panel");
								if(isset($_SESSION['teacher'])){
								$q="select * from subjects where uploadedby='$_SESSION[teacher]'";
								$res=mysqli_query($con,$q);
								} else{
								$q="select * from subjects ";
								$res=mysqli_query($con,$q);
								}
								while($row=mysqli_fetch_array($res)){
									
									echo "<tr>";
									echo "<td>".$id."</td>";
									$id++;
									echo "<td>".$row['subject']."</td>";
									echo "<td>".$row['notes']."</td>";
									echo "<td>".$row['assignments']."</td>";
									echo "<td>".$row['quizz']."</td>";
									echo "<td>".$row['question paper']."</td>";
									echo "<td>".$row['ppt']."</td>";
									echo "<td>".$row['video']."</td>";
									if(isset($_SESSION['teacher'])){
									echo "<td>". $_SESSION['teacher'] ."</td>"; }
									else 
									{
										echo "<td>". $row['uploadedby']."</td>";
									}
									echo "<td><a href='sub_up.php?sno=$row[sno]'>Update</a></td>";
									
									echo "<td><a href='sub_del.php?sno=$row[sno]'>Delete</a></td>";
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