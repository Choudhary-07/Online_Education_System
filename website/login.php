<?php include "header1.php"; ?>
				<div class="row" style="padding:40px;">
				<div class="col-sm-4"></div>
					<div class="col-sm-4">
						<div class="form-body">
							<form action="verifydata.php" method="post"> 
							<div class="form-group">Email<input type="email" name="email" class="form-control" placeholder="Email" required="required"></div> 
							<div class="form-group">Password<input type="password" name="pass"class="form-control"  placeholder="Password" required="required"> </div> 
							<button type="submit" name="submit" class="btn btn-primary">Submit</button> </form> 
						</div>
						</div>
				<div class="col-sm-4"></div>
						</div>                   
<?php include "footer.php"; ?>