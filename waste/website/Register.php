<?php include "header1.php"; ?>
<!-- <script>
function vali()
{
	var ph=document.getElementById('phn').value;
	var pat=/^[0-9]{10}$/;
	if(!pat.test(ph))
	{
		alert(fill numbers only);
		return false;
	}
else
{
	return true;
}
	
}
</script> -->
		<div class="row"  style="Padding:40px;">
					<div class="col-sm-4"></div>
					<div class="col-sm-4">
						<div class="form-body">
							<form action="regidone.php" method="post"> 
							<div class="form-group">Name<input type="text" name="name" class="form-control" placeholder="Name" required="required"></div>
							<div class="form-group">Qualification<input type="text" name="qual" class="form-control"  placeholder="Qualification" required="required"></div>
							<div class="form-group">Subject<input type="text" class="form-control" name="sub"placeholder="Subject" required="required"></div>
							<div class="form-group">Experience<input type="text" class="form-control" name="exp" placeholder="Experience" required="required"></div>
							<div class="form-group">Email<input type="email" name="email" class="form-control" placeholder="Email" required="required"></div> 
							<div class="form-group">Password<input type="password" name="pass"class="form-control"  placeholder="Password" required="required"> </div> 
							<div class="form-group">Phone/Mobile No<input type="text" pattern="[0-9]{10}" id="phn" name="phone" class="form-control" placeholder="eg.7866666622" required="required"> </div> 
							<button type="submit" name="submit" class="btn btn-primary" >Submit</button> </form> 
					
						</div>
					</div>
					<div class="col-sm-4"></div>
		</div>

      
                   
<?php include "footer.php"; ?>