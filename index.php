<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Mr Vabs</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>EMPLOYEE REGISTRATION</h2>
	</div>
	
	<form method="post" >

		
		<div class="input-group">

			<label>Full Name</label>
			<input type="text" name="full_name" placeholder="Enter Your Name" required>
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" placeholder="Enter Email" required>
		</div>
		<div class="input-group">
			<label>Mobile Number</label>
			<input type="text" placeholder="Enter Mobile Number" name="mobileno" required>
		</div>	
		<div class="input-group">
			<label>Full Address</label>
			<input type="text" name="address" placeholder="Enter Full Address" required>
		</div>
		<div class="input-group">
			<label>Job Location</label>
		<select name="job">
		<option value="Default">Default</option>
		<option value="Chennai">Chennai</option>
		<option value="Bangalore">Bangalore</option>
		<option value="Chennai">Pune</option>
		<option value="Bangalore">Mysore</option>
		<option value="Chennai">Chandigarh</option>
 		</select>
		</div>
		<div class="input-group">
			<label>Designation</label>
		<select name="designation" required="" class="input-group">
			<option value="Default">Default</option>
			<option value="Systems Engineer">Systems Engineer</option>
			<option value="Senior Systems Engineer">Senior Systems Engineer</option>
			<option value="Technology Analyst">Technology Analyst</option>
			<option value="Technology Lead">Technology Lead</option>
			<option value="Project Manager">Project Manager</option>
			</select>
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="reg_user">Register</button>
		</div>
		<a href="viewdata.php">View Details</a>
	</form>
</body>
</html>
