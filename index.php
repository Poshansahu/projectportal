<?php
// Start the session
session_start();
?>
<?php error_reporting(0); ?> 
<html>
<?php include 'connection.php'; ?> 
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<?php include 'header.php';?>
<div class="container-fluid" id = "d1">
  
  <div class="login-form">
	<form method="post">
        <h1 class="text-center">Project Management Portal</h1>       
       <h6 class = "text-center"> Online Portal to Manage all your Projects </h6>

        <div class="form-group">
  <div class="d-grid gap-2 col-1 mx-auto">
  <button class="btn btn-primary" type="button" onClick="login()">Login</button>  
  </div>
        </div> 
	
    </form>
	</div>
<img src="home.png" class="img-fluid" alt="home">
  
  </div>
  
  <script type="text/javascript">
            function login() {
				window.location.href = "login.php";
            }
</script>   
<?php include 'footer.php';?>
</body>
</html>