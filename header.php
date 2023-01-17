<style>
#nav{
     top: 0;
	box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
}
</style>
<nav class="navbar navbar-expand-lg navbar-light bg-light" id="nav">
  <div class="container-fluid">
<a class="navbar-brand" href="index.php">
      <img src="logo.png" alt="" width="50" height="50">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="dashboard.php">Dashboard</a>
        </li>
		
		<li class="nav-item">
          <a class="nav-link active" href="register.php">Register</a>
        </li>
		
		<li class="nav-item">
          <a class="nav-link active" href="login.php">Login</a>
        </li>
      </ul>
        <button class="btn btn-outline-success" type="button" onClick="logout()">Logout</button>
    </div>
  </div>
</nav>
<script type="text/javascript">
            function logout() {
                alert("logged out successfully");
				window.location.href = "logout.php";
            }
</script>