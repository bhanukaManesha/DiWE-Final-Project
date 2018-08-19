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

	$userName = $_GET["userName"] ;
		
	include("../includes/dbConfig.php");
	$sql="SELECT * from USER WHERE user.userName=\"$userName\" LIMIT 1";
	$result=mysqli_query($conn,$sql) or die(mysqli_error());
	$num=mysqli_num_rows($result);
	
	$no=0;
	
	if($result && $num >0){
		
		while ($newArray = mysqli_fetch_array($result)) { 
		
		$userID=$newArray['userID'];		
		}
	}


  ?>	
<!doctype html>

<html lang="en">
  <head>
	<?php
	 
	 include('../includes/baseurl.php')
	 
	 ?>
   
    <meta charset="utf-8">
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
  <div class="container">



  <br>
  <div class="container">
<form class="form-horizontal" action="admin/saveNewProject.php" method="post" enctype="multipart/form-data">
 
 <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Project Client ID:</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" name="projectClientID" placeholder="Enter Client ID" value="<?php echo $userID ?>">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Project Client Name:</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" name="projectClientName" placeholder="Enter Client Name" value="<?php echo $_GET["userName"]?>">
    </div>
  </div>

<h1 style="text-align: center">Project Information</h1>
 
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Project Name:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="projectName" placeholder="Enter Project Name">
    </div>
  </div>
  <br>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Project Short Name:</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" name="projectStName" placeholder="Enter Project Short Name">
    </div>
  </div>
 <br>
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Project Type:</label>
    <div class="col-sm-10">
      <select class="form-control" name="projectType">
      <option name="house">House</option>
      <option name="renovation">Renovation</option>
      <option name="apartment">Apartment</option>
		</select>
    </div>
  </div>
  <br>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Project Address:</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" name="projectAddress" placeholder="Enter Project Address">
    </div>
  </div>
 <br>
 <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Project Short Description:</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" name="projectStDesc" placeholder="Enter Project Short Description">
    </div>
  </div>
 <br>
 <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Project Long Description:</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" name="projectLgDesc" placeholder="Enter Project Long Description" style="height: 100px">
    </div>
  </div>
 <br>
  
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Project Start Date:</label>
    <div class="col-sm-10"> 
      <input type="date" class="form-control" name="projectStartDate" placeholder="Enter Project Short Description">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Estimated End Date:</label>
    <div class="col-sm-10"> 
      <input type="date" class="form-control" name="projectEndDate" placeholder="Enter Project Short Description">
    </div>
  </div>
  
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Cover Photo:</label>
    <div class="col-sm-10"> 
      <input type="file" class="form-control" name="fileToUpload" id="fileToUpload" placeholder="Upload Cover Photo" accept="image/*">
    </div>
  </div>

  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default" name="submit">Submit</button>
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
