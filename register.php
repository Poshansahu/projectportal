<html>
<head>
<?php include 'connection.php'; ?> 
<?php error_reporting(0); ?> 

  <title>Register</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />


<style>
a:link, a:visited {
    text-decoration: none;
    color: black;
    cursor: pointer;
}
.login-form {
    width: 400px;
  	font-size: 15px;
}
.login-form form {
    margin-bottom: 2px;
    padding: 30px;
}
.login-form h2 {
    margin: 0 0 15px;
}
.form-control, .btn {
    min-height: 38px;
    border-radius: 8px;
}
.btn {        
    font-size: 15px;
    font-weight: bold;
}

.login-form .form-group{
margin-top:15px;
}
</style>

</head>
<body>
<?php include 'header.php';?>
<div class="container-fluid">
<table>
    <tr>
      <td>
	<?php
								 $error=''; //Variable to Store error message;
        if(isset($_REQUEST['register']))
		{
			                               $fullname = $_REQUEST['fullname'];
	                                       $email = $_REQUEST['email'];
										   $username = $_REQUEST['username'];
										   $developer1 = $_REQUEST['developer1'];
										   $developer2 = $_REQUEST['developer2'];
										   $password = $_REQUEST['password'];
										    $cpassword = $_REQUEST['cpassword'];
	                                        
		  $sql = "Select * from managers where username='$username'";
          $result = mysqli_query($con, $sql);
          $num = mysqli_num_rows($result);
	if($num == 0) {
        if($password == $cpassword) {
          $q = "insert into managers values('','$fullname','$email','$username','$password','$developer1','$developer2')";
          $result = mysqli_query($con, $q);
            if ($result) {
				echo "<script>
	             alert('Manager Registered !!!');
				 window.location.href = 'login.php';
	                 </script>";
            }
		}
        else { 
            $error = "Passwords do not match"; 
        }      
    }
   if($num>0) 
   {
      $error="Username not available"; 
   }
   }
  ?>

<h1 class="text-center">Project Management Portal</h1>       
       <h6 class = "text-center"> Online Portal to Manage all your Projects </h6>
<div class="login-form">
	<form method="post">
        <h2 class="text-center">Register Manager</h2>  
       	
		<div class = "row">
		   <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
           <input type="text" class="form-control" placeholder="Full Name" name="fullname" required="required">
		</div>
		   </div>
		   <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
		    <input type="text" class="form-control" placeholder="Email Id" name="email" required="required">
		</div>
		   </div>
		</div>		
		
		
		<div class = "row">
		   <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Username" name="username" required="required">
		</div>
		   </div>
		   <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Password" name="password" required="required">
		</div>
		   </div>
		</div>
		
		<div class = "row">
		   <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Confirm Password" name="cpassword" required="required">
		</div>
		   </div>
		   <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Developer name 1" name="developer1" required="required">
		</div>
		   </div>
		</div>
		
		
		<div class = "row">
		   <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Developer Name 2" name="developer2" required="required">
		</div>
		   </div>
		   <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
            <button type="submit" name="register" class="btn btn-primary btn-block">Click to Register</button>
		</div>
		   </div>
		</div>

		<!-- Error Message -->
    <span><?php echo $error; ?></span>
    </form>	
	</div>
	</td>
      <td>
	  <img src="login.png" class="img-fluid" alt="home">
    </td>
    </tr>
    </table>
	</div>
<?php include 'footer.php';?>
</body>
</html>