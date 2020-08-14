<?php include "header1.php"; ?>
				<div class="row" style="padding:40px;">
				<div class="col-sm-4"></div>
					<div class="col-sm-4">
						<div class="form-body">
							<form action="queryinsert.php" method="post"> 
							<div class="form-group">Name<input type="text" name="name" class="form-control" placeholder="name" required="required"></div> 
							<div class="form-group">Email<input type="email" name="email" class="form-control" placeholder="Email" required="required"></div> 
							<div class="form-group">Profession<input type="text" name="prof" class="form-control" placeholder="Student/Teacher" required="required"></div> 
							<div class="form-group">Phone No<input type="tel"  max="10" pattern="[0-9]{10}" name="phone" class="form-control" placeholder="Phoneno" required="required"></div> 
							<div class="form-group">Query<input type="address" name="query" class="form-control" placeholder="Any Question" required="required"></div> 
							<button type="submit" name="submit" class="btn btn-primary">Submit</button> </form> 
						</div>
						</div>
				<div class="col-sm-4"></div>
						</div>                   
<?php include "footer.php"; ?>