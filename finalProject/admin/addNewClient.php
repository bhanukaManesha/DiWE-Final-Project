<?php 
  
  session_start();
  
if( !isset($_SESSION['role'])){
	if ($_SESSION['role'] !== "Admin"){
	echo "<script>
	alert('Please Login as Admin');
	window.location='../loginform/index.php';
	
	</script>";
	}
}
  ?>	
<!doctype html>

<html lang="en">
  <head>
	<?php
	 
	 include('../includes/baseurl.php')
	 
	 ?>
   
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Construction Company Website for building residences">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <link rel="shortcut icon" href="images/favicon.ico">
    <title>ADMIN DASHBOARD | SAMAN GAMAGE CIVIL ENGINEERS AND CONTRACTORS</title>

    <!-- Page styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">       
 <!-- Start Style tag -->
   <style>
	   	.demo-layout-transparent {
  			
			background-size:cover; 
			background-position: center;
		}
		.demo-layout-transparent .mdl-layout__header,
		.demo-layout-transparent .mdl-layout__drawer-button {
  		/* This background is dark, so we set text to white. Use 87% black instead if
    	your background is light. */
  		color:white;
		background-color: forestgreen;	
		} 
	   
	   
	   
	   
	   	.demo-card-wide.mdl-card {
  			width: 512px;
		}
		.demo-card-wide > .mdl-card__title {
		  color: #fff;
		  height: 300px;
			background-position: center;
		}
		.demo-card-wide > .mdl-card__menu {
		  color: #fff;
		}
	   
	  	
</style>
   <!-- End Style tag -->
 
  </head>
  
  
  <body>
  
  <div class="demo-layout-transparent mdl-layout mdl-js-layout animated fadeIn" >
  <?php
	 
	 include('../includes/navbar.php');
	 
	 ?>
	 
	 <br>
	 <!-- jumbotron-->
  <div class="jumbotron" >
  <h1 style="text-align: center"> ADMIN DASHBOARD </h1>
  <p style="text-align: center">  <?php echo $_SESSION["username"] ?> </p>
  </div>
  <!-- end of jumbotron -->
  
  <h1 style="text-align: center">Client Information</h1>
  <br>
  <div class="container">
<form class="form-horizontal" action="admin/saveNewClient.php" method="post">
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Client Name:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="username" placeholder="Enter Client Name">
    </div>
  </div>
  <br>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Client Address:</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" name="address" placeholder="Enter Address">
    </div>
  </div>
 <br>
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Client Email:</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" name="email" placeholder="Enter email">
    </div>
  </div>
  <br>
  <div class="form-group">
    <label class="control-label col-sm-2" name="pwd">Client Password:</label>
    <div class="col-sm-10"> 
      <input type="password" class="form-control" name="pwd" placeholder="Enter password">
    </div>
  </div>
  <br>


  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button style="width: 100%" type="submit" class="btn btn-default">Enter Project Details</button>
    </div>
  </div>
</form>
	  </div>

      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-2.1.4.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>   
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  </body>
</html>
