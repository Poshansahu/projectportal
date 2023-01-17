<?php
// Start the session
session_start();
?>
<html>
<?php include 'connection.php'; ?> 
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<style>
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
	 if(isset ($_REQUEST['login']))
           {
				$username = $_REQUEST['username'];
			    $pass = $_REQUEST['password'];  
				
				$q =  "select * from managers where username = '$username' AND password = '$pass'";
				$rs = mysqli_query($con, $q);
                $rows = mysqli_num_rows($rs);
             if($rows == 1)
			 {
             $_SESSION['manager']= $username;
             header("Location: dashboard.php"); // Redirecting to other page
             }
            else
             {
          $error = "Invalid username or password !!";
             }
 mysqli_close($con); // Closing connection				
			  }		
?>
<h1 class="text-center">Project Management Portal</h1>       
       <h6 class = "text-center"> Online Portal to Manage all your Projects  </h6>
<div class="login-form">
	<form method="post">
        <h2 class="text-center">Manager Login</h2>       
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Username" name="username" required="required">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Password" name="password" required="required">
        </div>
        <div class="form-group">
            <button type="submit" name="login" class="btn btn-primary btn-block">Log in</button>
        </div> 

 	<div class = "row">
		   <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
           <p> Don't have account? </p>
		</div>
		   </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
           <a href="register.php"> Click here to Register</a>
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