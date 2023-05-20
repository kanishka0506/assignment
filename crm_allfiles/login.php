
<?php 
 
 $host="localhost";
 $user="root";
 $password="";
 $db="crm";


session_start();

  $data=mysqli_connect($host,$user,$password,$db);
   
   if($data===false)
   {
	 die("connection error");
	 
	   
   }
   
   if($_SERVER["REQUEST_METHOD"]=="POST")
   {
	   $username=$_POST["username"];
	   $password=$_POST["password"];
	   $role=$_POST["role"];
	  
	   
	   
	   
	   $sql="SELECT * from user where username='".$username."' AND password='".$password."' AND role='".$role."'";
	   
	   $result=mysqli_query($data,$sql);
	   
	   $row=mysqli_fetch_array($result);
	   
	   if(mysqli_num_rows($result)===1)
	   {
		   $rows = mysqli_fetch_assoc($result);
		   if($row['password']=== $password && $row['role']==$role)
		   {
			   
			   
		   }
	   }
	   
	   if($row["role"]=="admin")
	   {
         $_SESSION["username"]=$username;
		 
		 header("location:admin.php");
	   }
	   
	   elseif($row["role"]=="manager")
	   {
          $_SESSION["username"]=$username;
		  
		  header("location:manager.php");
	   }
	   
	   elseif($row["role"]=="employee")
	   {
           $_SESSION["username"]=$username;
		   
		   header("location:employee.php");
	   }
	   
	   else 
	   {
		   echo '<script type="text/javascript">';
           echo 'alert("USERNAME OR PASSWORD OR ROLE IS WRONG ")';  //not showing an alert box.
           echo '</script>';

		   
	   }
   }
   
   
   
?>







<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Login Form</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<br><br>
<style>
.login-form {
    width: 540px;
	
    margin: 50px auto;
  	font-size: 18px;
}
.login-form form {
    margin-bottom: 25px;
    background: #f7f7f7;
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    padding: 30px;
}
.login-form h2 {
    margin: 0 0 25px;
}
.form-control, .btn {
    min-height: 48px;
    border-radius: 2px;
}
.btn {        
    font-size: 20px;
    font-weight: bold;
}

</style>
</head>
<body>
<div class="login-form">
    <form action="#" method="post">
        <h2 class="text-center">Log in</h2>  

           
			
        <div class="form-group">
            <input type="text" name="username" class="form-control" placeholder="username" required="required">
        </div>
        <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="password" required="required">
        </div>
		<br>
		
		<div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="email" required="email">
        </div>
		
		
		<br>
		<div class="mb-1">
            <label class="form-lable">Select User Type:</label>
        </div>
		<select class="form-select" name="role" aria-label="Default select example">
        <option selected>Open this select menu</option>
        <option value="admin">Admin</option>
        <option value="manager">Manager</option>
        <option value="employee">Employee</option>
		<option value="tester">Tester</option>
		<option value="worker">worker</option>
        </select>
		
		<br><br>
		<br>
        <div class="form-group">
            <input type="submit" name="login-btn" class="btn btn-primary btn-block" value="Login"/>
        </div>
               
    </form>
    
</div>
</body>
</html>