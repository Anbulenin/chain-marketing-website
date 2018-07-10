<!DOCTYPE html>
<?php include 'navbar.php';?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<div class="bg-light"> 
		<BR><BR><BR></BR>

		<div class="container">
			<h3>New User Registration</h3><br>
		</div>
		<hr>
	</div>
	<div class="container">

		<form method="POST" action="formcheck.php">
			<div class="form-group row">
				<label for="inputName1" class="col-sm-2 col-form-label">Name</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" name="firstname" id="inputName1" placeholder="First Name">
				</div>

				<div class="col-sm-3">
					<input type="text" class="form-control"  name="lastname" id="inputName2" placeholder="Last Name">
				</div>
			</div>
			<div class="form-group row">
				<label for="inputSLMID3" class="col-sm-2 col-form-label">SLMID</label>
				<div class="col-sm-5">
					<input type="text" class="form-control"  name="nlid" id="inputSLMID3" placeholder="SLMID">
				</div>
			</div>
			<div class="form-group row">
				<label for="inputlogincode3" class="col-sm-2 col-form-label">logincode</label>
				<div class="col-sm-5">
					<input type="text" class="form-control"  name="password" id="inputlogincode3" placeholder="logincode">
				</div>
			</div>
			<div class="form-group row">
				<label for="inputAddress3" class="col-sm-2 col-form-label">Address</label>
				<div class="col-4">
					<input type="text" class="form-control"  name="address" id="inputAddress3" placeholder="Address">
				</div>
				<div class="col-3">
					<input type="text" class="form-control"  name="city" id="inputAddress3" placeholder="City">
				</div>
				<div class="col">
					<input type="text" class="form-control"  name="state" id="inputAddress3" placeholder="State">
				</div>
				<div class="col">
					<input type="text" class="form-control"  name="zip" id="inputAddress3" placeholder="Zip">
				</div>
			</div>
			<div class="form-group row">
				<label for="inputContactno3" class="col-sm-2 col-form-label">Contact No.</label>
				<div class="col-sm-3">
					<input type="number" class="form-control"  name="contactno" id="inputContactno3" placeholder="Contact number">
				</div>
			</div>

			<fieldset class="form-group">
				<div class="row">
					<legend class="col-form-label col-sm-2 pt-0">Gender</legend>
					<div class="col-sm-10">
						<div class="form-check">
							<input class="form-check-input" type="radio" name="gender" id="gridgender1" value="male" checked>
							<label class="form-check-label" for="gridgender1">
								Male
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="gender" id="gridgender2" value="female">
							<label class="form-check-label" for="gridgender2">
								Female
							</label>
						</div>

					</div>
				</div>
			</fieldset>

			<div class="form-group row">
				<label for="inputdob3" class="col-sm-2 col-form-label">Date of Birth</label>
				<div class="col-sm-3">
					<input type="date"  name="dob" class="form-control" id="inputdob3">
				</div>
			</div>
			<hr>
			<h4>Payment Details</h4><hr><br>

			<div class="form-group row">
				<label for="inputDDNO" class="col-sm-2 col-form-label">DD NO.</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" name="ddno" id="inputDDNO" placeholder="DD number">
				</div>
                <label for="inputbankname" class="col-sm-2 col-form-label">Bank Name</label>
				<div class="col-sm-3">
					<input type="text" class="form-control"  name="bankname" id="inputbankname" placeholder="Bank name">
				</div>
			</div>
			<div class="form-group row">
				<label for="inputbranch" class="col-sm-2 col-form-label">Branch</label>
				<div class="col-sm-4">
					<input type="text" class="form-control"  name="branch" id="inputbranch" placeholder="Branch name">
				</div>
                <label for="inputamount" class="col-sm-2 col-form-label">Amount rs.</label>
				<div class="col-sm-3">
					<input type="number"  name="amount" class="form-control" id="inputamount">
				</div>
			</div>

            <div class="form-group row">
				<div class="col-sm-2">User has a sponser?</div>
				<div class="col-sm-10">
					<div class="form-check">
						<input class="form-check-input" type="checkbox" id="trigger" name="question">
						<label class="form-check-label" for="trigger">
							yes
						</label>
					</div>
				</div>
			</div>


			<div id="hidden_fields">
			<div class="form-group row">
				<label for="inputsponser" class="col-sm-2 col-form-label">Sponser Name</label>
				<div class="col-sm-4">
					<input type="text"  name="senior_name" class="form-control" id="inputsponser" placeholder="Sponser name">
				</div>
                <label for="inputidno" class="col-sm-2 col-form-label">ID NO.</label>
				<div class="col-sm-3">
					<input type="text"  name="senior_id" class="form-control" id="inputidno">
				</div>
			</div>
		    </div>
			<br>

			<div class="form-group row">
				<div class="col-sm-2">Terms and Conditions</div>
				<div class="col-sm-10">
					<div class="form-check">
						<input class="form-check-input" type="checkbox" id="gridCheck1">
						<label class="form-check-label" for="gridCheck1">
							Agree
						</label>
					</div>
				</div>
			</div>
			<br>
			<div class="form-group row">
				<div class="col-sm-10">
					<button type="submit" class="btn btn-primary">Done</button>
				</div>
			</div>
		</form>


	</div>



</body>
</html>