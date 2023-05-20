
<?php

  include 'check.php';
  if(isset($_POST['add']))
  {
	  
	  $firstname=$_POST['firstname'];
	  $middlename=$_POST['middlename'];
	  $lastname=$_POST['lastname'];
	  $dob=$_POST['dob'];
	  $gender=$_POST['gender'];
	  $mobileno=$_POST['mobileno'];
	  $email=$_POST['email'];
	  $city=$_POST['city'];
	  $pin=$_POST['pin'];
	  $role=$_POST['role'];
	  $username=$_POST['username'];
	  $password=$_POST['password'];
	  
	  $insert="INSERT INTO user(firstname,middlename,lastname,dob,gender,mobileno,email,city,pin,role,username,password) VALUES('$firstname','$middlename','$lastname','$dob','$gender','$mobileno','$email','$city','$pin','$role','$username','$password')";      
	  
	  $run=mysqli_query($con,$insert);
	  
	  if($run)
	  {
		  
		  echo "Data inserted successfully";
		  header("location:view.php");
	  }
	  
	  else
	  {
		  
		  die(mysqli_error($con));
		  
	  }
	  
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<title>add</title>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


</head>
<body>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">


<div class="container">
<br>  <p class="text-center"><font size="5"><b> CUSTOMER REGISTRATION FORM</b></font></p>
<hr>


<div class="row justify-content-center">
<div class="col-md-6">
<div class="card">
<header class="card-header">
	
	<h5 class="card-title mt-2">ADD CUSTOMER</h5>
</header>
<article class="card-body">

<form action="#" method="POST">

	<div class="form-row">
		<div class="col form-group">
		
			<label>First Name </label>   
		  	<input type="text" class="form-control" placeholder="First Name" name="firstname">
		</div> <!-- form-group end.// -->
		
		<div class="col form-group">
		
			<label>Middle Name </label>   
		  	<input type="text" class="form-control" placeholder="Middle Name" name="middlename">
		</div> <!-- form-group end.// -->
		
		<div class="col form-group">
			<label>Last Name</label>
		  	<input type="text" class="form-control" placeholder="Last Name" name="lastname">
		</div> <!-- form-group end.// -->
		
	</div> <!-- form-row end.// -->
	
	
	<div class="form-group">
		<label>Date Of Birth</label>
		<input type="text" class="form-control" placeholder="Date of Birth" name="dob">
	</div> <!-- form-group end.// -->
	
	
	<div class="form-group">
	<label>Gender : </label>
	<br>
		  <input class="form-check-input" type="radio" name="gender" value="male">  Male
		  <br>
		  <input class="form-check-input" type="radio" name="gender" value="female"> Female
		  
	</div> <!-- form-group end.// -->
	
	
	<div class="form-group">
		<label>Mobile Number</label>
		<input type="text" class="form-control" placeholder="Mobile Number (10-Digit)" name="mobileno">
	</div> <!-- form-group end.// -->
	
	
	<div class="form-group">
		<label>Email address</label>
		<input type="email" class="form-control" placeholder="Enter your Email address" name="email">
		<small class="form-text text-muted">We'll never share your email with anyone else.</small>
	</div> <!-- form-group end.// -->
	
	
	<div class="form-row">
		<div class="form-group col-md-6">
		  <label>City</label>
		  <input type="text" class="form-control" placeholder="City" name="city">
		</div> <!-- form-group end.// -->
		
		<div class="form-group col-md-6">
		  <label>Pincode</label>
		  <input type="text" class="form-control" placeholder="Pincode (6-Digit)" name="pin">
		</div> <!-- form-group end.// -->
		
	</div> <!-- form-row.// -->
	
	 <div class="form-row">
	<div class="mb-1">
            <label class="form-lable">Select User Type : - </label>
        </div>
		<br>
		<select class="form-select" name="role" aria-label="Default select example">
		<br>
        <option selected>Open this select menu</option>
        <option value="admin">Admin</option>
        <option value="manager">Manager</option>
        <option value="employee">Employee</option>
        </select>
		</div>
		
		
	<div class="form-group">
		<label>Username</label>
		<input type="text" class="form-control" placeholder="User Name" name="username">
	</div> <!-- form-group end.// -->
	
	
	<div class="form-group">
		<label>Create password</label>
	    <input class="form-control" type="password" placeholder="Password" name="password">
	</div> <!-- form-group end.// -->  
	
	
    <div class="form-group">
        <input type="submit" name="add" class="btn btn-primary btn-block" value="ADD"/>
    </div> <!-- form-group// -->      
    
	
</form>

</article> <!-- card-body end .// -->

</div> <!-- card.// -->
</div> <!-- col.//-->

</div> <!-- row.//-->


</div> 
<!--container end.//-->

<br><br>
<a class= "btn btn-primary" href="view.php">view customer</a>
<br><br>
<br><br><br><br>

</body>
</html>
