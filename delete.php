<?php error_reporting(0); ?> 
<?php
// Start the session
session_start();
if(!isset ($_SESSION['manager'])){
   header("Location: login.php");
}else{
?>
<html>
<?php include 'connection.php'; ?> 
<head>
  <title>Delete</title>
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

<?php
		$error=''; //Variable to Store error message;
        if(isset($_REQUEST['delete']))
		{
			                               $id = $_REQUEST['project'];
										   $sql = "DELETE FROM projects WHERE id='$id'";
           if(mysqli_query($con, $sql)){
                echo "<script>
	             alert('Project Deleted !!!');
				 window.location.href = 'delete.php';
	                 </script>";
				}
		  else{
    echo  $error="ERROR: Could not able to delete";
             }
		}                                  
  ?>


</script>
<div class="container-fluid">
  <table>
    <tr>
      <td>
<div class="login-form">
	<form method="post" enctype="multipart/form-data">
        <h2 class="text-center">Delete Project</h2>
		
		<div class = "row">
		   <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
		<label for='project'>Select Project</label>
           <select name='project' class='form-control'>";
		  <option value="none" selected disabled hidden>Select an Option</option>
          <?php
		  $sql1 = "Select name,id from projects";
          $result1 = mysqli_query($con, $sql1);
		  $num1 = mysqli_num_rows($result1);
		  
		  if($num1 > 0){
		while($v1 = mysqli_fetch_array($result1))
                 {
	               echo "
				 <option value={$v1['id']}>{$v1['name']}</option>";
                     }
		}else{
        $error = "No data Found !!";
	    }
			?>			
		  </select>
		</div>
		   </div>
		   <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
          <label for="prototype">Click to Delete</label>
            <button type="submit" name="delete" class="btn btn-danger btn-block">Click to Delete</button>
		</div>
		   </div>
		</div>
		
	
		<!-- Error Message -->
    <span><?php echo $error; ?></span>
    </form>	
	</div>
    </td>
    <td>
<img src="pic1.png" class="img-fluid" alt="home">
    </td>
    </tr>
    </table>
</div>
<?php } include 'footer.php';?>
</body>
</html>