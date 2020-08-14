<?php include"header.php" ?>
	<?php
		
		include "connect.php";
		$q="select * from subjects where sno='$_REQUEST[sno]'";
		$run=mysqli_query($obj,$q);
		$row=mysqli_fetch_array($run);
		 $i=$row['sno'];
		 $s=$row['subject'];
		 $n=$row['notes'];
		 $a=$row['assignments'];
		 $q=$row['quizz'];
		 $q1=$row['question paper'];
		 $p=$row['ppt'];
		 $v=$row['video'];
	
		?>
			<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					<div class="form-grids row widget-shadow " data-example-id="basic-forms" style="padding-top:60px;"> 
					<div class="col-md-8">
						<div class="form-title">
							<h4><b><i>Subjects Data</i></b></h4>
						</div>
						<div class="form-body">
							<form action="sub_updb.php" method="post" enctype="multipart/form-data"> 
							<input type="hidden" name="sno" value="<?php echo $i; ?>">
							<div class="form-group">Subject<input type="text" class="form-control" name="sub" value="<?php echo $s ;?>"></div>
							<div class="form-group">Notes<input type="file" name="notes">
									<input type="hidden" name="notesold"  value="<?php echo $n;?>" />
										<?php  if(trim($n)!=""){ ?>
										<a target="area"href="data/notes/<?php echo $n; ?>">Show</a>
										<?php } ?>
							</div>
							<div class="form-group">Assigments<input type="file" name="assi">
								<input type="hidden" name="assiold"  value="<?php echo $a;?>" />
								<?php  if(trim($a)!=""){ ?>
								<a target="area"href="data/assi/<?php echo $a; ?>">Show</a>
								<?php } ?>
							</div>	
							<div class="form-group">Quiz<input type="file" name="quiz" >
							<input type="hidden" name="quizold"  value="<?php echo $q;?>" />
								<?php  if(trim($q)!=""){ ?>
								<a target="area"href="data/quiz/<?php echo $q; ?>">Show</a>
								<?php } ?>
							</div> 
							<div class="form-group">Question Papers<input type="file" name="pap" >
							<input type="hidden" name="papold"  value="<?php echo $q1;?>" />
										<?php  if(trim($q1)!=""){ ?>
										<a target="area"href="data/pap/<?php echo $q1; ?>">Show</a>
										<?php } ?>
							</div> 
							<div class="form-group">PPT<input type="file" name="ppt">
								<input type="hidden" name="pptold"  value="<?php echo $n;?>" />
										<?php  if(trim($p)!=""){ ?>
										<a target="area"href="data/ppt/<?php echo $p; ?>">Show</a>
										<?php } ?>
							</div>
							<div class="form-group">Video<input type="file" name="vid">
								<input type="hidden" name="vidold"  value="<?php echo $v;?>" />
										<?php  if(trim($v)!=""){ ?>
										<a target="area"href="data/vid/<?php echo $v; ?>">Show</a>
										<?php } ?>
							</div> 
							<!--<div class="form-group">Uploaded By:-<input type="text" name="" class="form-control"  value="<?php echo $u; ?>"></div>--> 
							<button type="submit" name="submit" class="btn btn-default">Upload</button> </form> 
							<div class="row">
							
					</div>
		
					<div style="height:250px ;widht:100%;padding:20px "></div>
					</div>
					</div>
					<div class="col-md-4">
						<iframe class="col-md-12" name="area" style="height:500px;"></iframe>
					</div>
					
			</div>
	
		
			<?php include "footer.php"; ?>