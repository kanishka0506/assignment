

<?php
   $conn=mysqli_connect('localhost','root','','crm');
   if(isset($_GET['edit']))
   {
	 $edit_id = $_GET['edit']; 
	 
	 
	  $select= "SELECT * FROM user WHERE user_id='$edit_id'";
	  
	  $run=mysqli_query($conn,$select);
	  
	  $row_user=mysqli_fetch_array($run);
	  
	  
	   $username = $row_user['username'];
	   $password = $row_user['password'];
	   $role = $row_user['role'];
	   $firstname = $row_user['firstname'];
	   $middlename = $row_user['middlename'];
	   $lastname = $row_user['lastname'];
	   $dob = $row_user['dob'];
	   $gender = $row_user['gender'];
	   $mobileno = $row_user['mobileno'];
	   $email = $row_user['email'];
	   $city = $row_user['city'];
	   $pin = $row_user['pin'];
	   
	   
   }

?>







<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<title>edit</title>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


</head>
<body>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">


<div class="container">
<br>  <p class="text-center"><font size="5"><b> UPDATE CUSTOMER REGISTRATION FORM</b></font></p>
<hr>


<div class="row justify-content-center">
<div class="col-md-6">
<div class="card">
<header class="card-header">
	
	<h5 class="card-title mt-2">UPDATE CUSTOMER DETAILS </h5>
</header>
<article class="card-body">





<form action="view.php" method="POST">

	<div class="form-row">
		<div class="col form-group">
		
			<label>First Name </label>   
		  	<input type="text" class="form-control" value = "<?php echo $firstname?>"  placeholder="First Name" name="firstname">
		</div> <!-- form-group end.// -->
		
		<div class="col form-group">
		
			<label>Middle Name </label>   
		  	<input type="text" class="form-control" value = "<?php echo $middlename?>" placeholder="Middle Name" name="middlename">
		</div> <!-- form-group end.// -->
		
		<div class="col form-group">
			<label>Last Name</label>
		  	<input type="text" class="form-control" value = "<?php echo $lastname?>" placeholder="Last Name" name="lastname">
		</div> <!-- form-group end.// -->
		
	</div> <!-- form-row end.// -->
	
	
	<div class="form-group">
		<label>Date Of Birth</label>
		<input type="text" class="form-control" value = "<?php echo $dob?>" placeholder="Date of Birth" name="dob">
	</div> <!-- form-group end.// -->
	
	
	<div class="form-group">
	<label>Gender : </label>
	<br>
		  <input class="form-check-input" type="radio"  value = "<?php echo $gender?>" name="gender" value="male">  Male
		  <br>
		  <input class="form-check-input" type="radio" value = "<?php echo $gender?>" name="gender" value="female"> Female
		  
	</div> <!-- form-group end.// -->
	
	
	<div class="form-group">
		<label>Mobile Number</label>
		<input type="text" class="form-control" value = "<?php echo $mobileno?>" placeholder="Mobile Number" name="mobileno">
	</div> <!-- form-group end.// -->
	
	
	<div class="form-group">
		<label>Email address</label>
		<input type="email" class="form-control" value = "<?php echo $email?>" placeholder="Enter your Email address" name="email">
		<small class="form-text text-muted">We'll never share your email with anyone else.</small>
	</div> <!-- form-group end.// -->
	
	
	<div class="form-row">
		<div class="form-group col-md-6">
		  <label>City</label>
		  <input type="text" class="form-control" value = "<?php echo $city?>"  placeholder="City" name="city">
		</div> <!-- form-group end.// -->
		
		<div class="form-group col-md-6">
		  <label>Pincode</label>
		  <input type="text" class="form-control" value = "<?php echo $pin?>" placeholder="Pincode" name="pin">
		</div> <!-- form-group end.// -->
		
	</div> <!-- form-row.// -->
	
	 <div class="form-row">
	<div class="mb-1">
            <label class="form-lable">Select User Type : - </label>
        </div>
		<br>
		<select class="form-select"  value = "<?php echo $role?>" name="role" aria-label="Default select example">
		<br>
        <option selected>Open this select menu</option>
        <option value="admin">Admin</option>
        <option value="manager">Manager</option>
        <option value="employee">Employee</option>
        </select>
		</div>
		
		
	<div class="form-group">
		<label>Username</label>
		<input type="text" class="form-control" value = "<?php echo $username?>" placeholder="User Name" name="username">
	</div> <!-- form-group end.// -->
	
	
	<div class="form-group">
		<label>Create password</label>
	    <input class="form-control" type="password" value = "<?php echo $password?>" placeholder="Password" name="password">
	</div> <!-- form-group end.// -->  
	
	
    <div class="form-group">
        <input type="submit" name="edit" class="btn btn-primary btn-block" value="Edit"/>
    </div> <!-- form-group// -->      
    
	
</form>





<br>
<a class= "btn btn-primary" href="view.php">view customer</a>

</article> <!-- card-body end .// -->

</div> <!-- card.// -->
</div> <!-- col.//-->

</div> <!-- row.//-->

<?php


  
  
  $conn=mysqli_connect('localhost','root','','crm');
  
  if(isset($_POST['edit']))
  {
	  
	  $efirstname=$_POST['firstname'];
	  $emiddlename=$_POST['middlename'];
	  $elastname=$_POST['lastname'];
	  $edob=$_POST['dob'];
	// $egender=$_POST['gender'];
	  $emobileno=$_POST['mobileno'];
	  $eemail=$_POST['email'];
	  $ecity=$_POST['city'];
	  $epin=$_POST['pin'];
	//  $erole=$_POST['role'];
	  $eusername=$_POST['username'];
	  $epassword=$_POST['password'];
	  
	//  if(empty($egender))
	 // {
	 //$egender=$gender; 
		  
	// }
	  
	//  if(empty($erole))
	  //{
		// $erole=$role; 
		  
	  //}
	   
	   $update="UPDATE user SET firstname='$efirstname',middlename='$emiddlename',lastname='$elastname',dob='$edob',mobileno='$emobileno',email='$eemail',city='$ecity',pin='$epin',username='$eusername',password='$epassword'  WHERE user_id='edit_id'";  
	   
	                             
	  
	  $run_update=mysqli_query($conn,$update);
	  
	  if($run_update === true)
	  {
		  
		  echo "Data Updated successfully";
		  //header("location:view.php");
	  }
	  
	  else
	  {
		  
		   echo "Failed !! Try again ";
		  
	  }
	  
  }

?>





</div> 
<!--container end.//-->

<br><br>



<br><br>
<br><br><br><br>





</body>
</html>

