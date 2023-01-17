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
  <title>Add</title>
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
        if(isset($_POST['add']))
		{
			                               $name = $_REQUEST['name'];
	                                       $description = $_REQUEST['description'];
										   $start_date = $_REQUEST['start_date'];
										   $deadline = $_REQUEST['deadline'];
										   $project_manager = $_REQUEST['project_manager'];
										    $developer = $_REQUEST['developer'];
										    $status = $_REQUEST['status'];
 if (isset($_FILES['prototype']['name']))
        {
          $file_name = $_FILES['prototype']['name'];
          $file_tmp = $_FILES['prototype']['tmp_name'];
 
          move_uploaded_file($file_tmp,"./pdf/".$file_name);
           $q = "insert into projects values('','$name','$description','$file_name','$start_date','$deadline','$project_manager','$developer','$start')";
          $result = mysqli_query($con, $q);
            if ($result) {
				echo "<script>
	             alert('Project Added !!!');
				 window.location.href = 'dashboard.php';
	                 </script>";
            }
         
        }
        else { 
            $error = "File must be uploaded in PDF format! !!"; 
        }      
    }
  ?>



<div class="container-fluid">
  <table>
    <tr>
      <td>
<div class="login-form">
	<form method="post" enctype="multipart/form-data">
        <h2 class="text-center">Add Project</h2>
       	
		<div class = "row">
		   <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
           <input type="text" class="form-control" placeholder="Project Name" name="name" required="required">
		</div>
		   </div>
		   <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
		    <input type="text" class="form-control" placeholder="Project Description" name="description" required="required">
		</div>
		   </div>
		</div>		
		
		<div class="form-group">
          <label for="prototype">Upload Prototype</label>
          <input type="file" class="form-control" name="prototype" accept=".pdf" required="required">
		</div>
		
		<div class = "row">
		   <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
          <label for="appointment_datetime">Project Start Date</label>
          <input type="date" class="form-control" name="start_date" required="required">
		</div>
		   </div>
		   <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
          <label for="appointment_datetime">Project Deadline</label>
          <input type="date" class="form-control" name="deadline" required="required">
		</div>
		   </div>
		</div>
		
		<div class = "row">
		   <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
		<label for='project_manager'>Select Manager</label>
           <select name='project_manager' class='form-control'>
		  <option value="none" selected disabled hidden>Select an Option</option>
          <?php
		  $sql1 = "Select fullname from managers";
          $result1 = mysqli_query($con, $sql1);
		  $num1 = mysqli_num_rows($result1);
		  
		  if($num1 > 0){
		while($v1 = mysqli_fetch_array($result1))
                 {
	               echo "
				 <option value={$v1['fullname']}>{$v1['fullname']}</option>";
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
          <label for="status">Select Developer</label>
           <select name="developer" class="form-control">
    <option value="none" selected disabled hidden>Select an Option</option>
    <option value="Rahul Sahu">Rahul Sahu</option>
    <option value="Manoj Sahu">Manoj Sahu </option>
	 <option value="Krishna Jain">Krishna Jain</option>
    <option value="Aniket Jain">Aniket Jain </option>
       </select>
		</div>
		   </div>
		</div>
		
		
		        <div class="form-group">
          <label for="status">Status</label>
           <select name="status" class="form-control">
    <option value="none" selected disabled hidden>Select an Option</option>
    <option value="0">0. Pending </option>
    <option value="1">1. Completed </option>
	 <option value="2">2. Processing </option>
    <option value="3">3. Hold </option>
	    <option value="4">4. Terminate </option>
       </select>
		   </div>
		   
        <div class="form-group">
            <button type="submit" name="add" class="btn btn-primary btn-block">Click Here to Add Project</button>
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