<?php
$db=mysqli_connect('prac3.cfwnf3gx9gtk.us-east-1.rds.amazonaws.com','admin',"12345678","employeereg");
if(isset($_POST['reg_user']))
{

	$full_name = mysqli_real_escape_string($db, $_POST['full_name']);
	$email = mysqli_real_escape_string($db, $_POST['email']);
	$mobileno = mysqli_real_escape_string($db, $_POST['mobileno']);
	$address = mysqli_real_escape_string($db, $_POST['address']);
	$job = mysqli_real_escape_string($db, $_POST['job']);
	$designation = mysqli_real_escape_string($db, $_POST['designation']);
	
			$query = "INSERT INTO employee_details(full_name,email,mobile_no,address,job,designation) 
					  VALUES('$full_name','$email','$mobileno','$address','$job','$designation')";
					  echo $query;
			$row=mysqli_query($db,$query);
			if ($row) {
				header('location: thank.php');
				# code...
			}
			else
			{
				echo "Invalid Details";
			}
		

}

?>
