<?php
// Start the session
session_start();
if(!isset ($_SESSION['manager'])){
   header("Location: login.php");
}else{
?>
<?php error_reporting(0); ?> 


<html>
<?php include 'connection.php'; ?> 
<head>
  <title>Dashboard</title>
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
    width: 430px;
    margin: 0px auto;
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

<div class="login-form">
	<form method="post" enctype="multipart/form-data">
        <h2 class="text-center">Manager Dashboard</h2>
		<table>
<tr>
<td>		
        <div class="form-group">
            <button type="button" name="add" class="btn btn-primary btn-block" onClick="window.location = 'addproject.php'">Add Project</button>
		</div>
		</td>
		<td>
		<div class="form-group">
            <button type="button" name="edit" class="btn btn-success btn-block" onClick="window.location='update.php'">Edit/Update Project</button>
		</div>
		</td>
		<td>
		<div class="form-group">
            <button type="button" name="delete" class="btn btn-danger btn-block" onClick="window.location='delete.php'">Delete Project</button>
		</div>
		</td>
		</tr>
		</table>
	</div>

</div>
<?php } include 'footer.php';?>
</body>
</html>