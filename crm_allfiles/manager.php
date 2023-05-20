
<?php
 session_start();
 
 if(!isset($_SESSION["username"]))
 {
	  header("location:login.php");
	 
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>manager</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
  <br><br>
  <h2>Manager Page</h2>
  
  <?php
  echo $_SESSION["username"]
  
  ?>
  
  <br>
  <div class="container">
  <br>
  <button class ="btn btn-primary">
  <a href="add.php" class="text-light">Add customer</a>
  </button>
  </div>
  
  <div class="container">
  <br>
  <button class ="btn btn-primary">
  <a href="logout.php" class="text-light">Logout</a>
  </button>
  </div>
 <br>







  <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
  
  <thead>
  
    <tr>
	
	<th class="th-sm">ID
      </th>
	  <th class="th-sm">UserName
      </th>
	  <th class="th-sm">Password
      </th>
	  <th class="th-sm">role
      </th>
      <th class="th-sm">First Name
      </th>
	  <th class="th-sm">Middle Name
      </th>
	  <th class="th-sm">Last Name
      </th>
	  <th class="th-sm">Date of Birth
      </th>
      <th class="th-sm">Gender
      </th>
      <th class="th-sm">Mobile Number
      </th>
      <th class="th-sm">Email
      </th>
      <th class="th-sm">City
      </th>
      <th class="th-sm">Pincode
      </th>
	  <th class="th-sm">Edit
      </th>
	  
	  
	  
    </tr>
	
  </thead>
  
  <tbody>
  
  <?php
      $conn=mysqli_connect('localhost','root','','crm');
	  $select= "SELECT * FROM USER";
	  
	  $run=mysqli_query($conn,$select);
	  
	  while($row_user=mysqli_fetch_array($run))
	  {
	  
       $user_id = $row_user['user_id'];
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
	   
	   
  ?>
    <tr>
      <td><?php  echo $user_id; ?></td>
	  <td><?php  echo $username; ?></td>
	  <td><?php  echo $password; ?></td>
	  <td><?php  echo $role; ?></td>
	  <td><?php  echo $firstname; ?></td>
	  <td><?php  echo $middlename; ?></td>
	 <td><?php  echo $lastname; ?></td>
      <td><?php  echo $dob; ?></td>
	  <td><?php  echo $gender; ?></td>
	  <td><?php  echo $mobileno; ?></td>
	  <td><?php  echo $email; ?></td>
	  <td><?php  echo $city; ?></td>
	  <td><?php  echo $pin; ?></td>
	  <td> <a class ="btn btn-success" href="edit.php?edit=<?php  echo $user_id; ?>">Edit</a></td>
	 
	  
    </tr>
    
	  <?php } ?>
  </tbody>


</table>



  </div>
  </body>
  </html>
