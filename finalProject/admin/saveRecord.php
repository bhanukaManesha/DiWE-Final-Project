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

	$projectID = $_GET['projectID'] ;
		
	include("../includes/dbConfig.php");
	$sql="SELECT project.*,user.*,projectOnGoing.* from project,user,projectOnGoing WHERE project.projectID=\"$projectID\" and project.projectUserID=user.userID and project.projectID =projectOnGoing.projectID LIMIT 1";
	$result=mysqli_query($conn,$sql) or die(mysqli_error());
	$num=mysqli_num_rows($result);
	
	$no=0;
	
	if($result && $num >0){
		
		while ($newArray = mysqli_fetch_array($result)) { 
		
				
			$userID=$newArray["userID"];
			$userName=$newArray["userName"];
			$userAddress=$newArray['userAddress'];
			$userEmail=$newArray['userEmail'];
			$userPassword=$newArray['userPassword'];

			$projectName=$newArray["projectName"];
			$projectStName=$newArray['projectStName'];
			$projectType=$newArray['projectType'];
			$projectAddress=$newArray['projectAddress'];
			$projectStDesc=$newArray['projectStDesc'];
			$projectLgDesc=$newArray['projectlgDesc'];
			$projectStartDate=$newArray['projectOnGoingDateStarted'];
			$projectEndDate=$newArray['projectOnGoingDateFinish'];
			$projectState = $newArray['projectState'];
			$userRole = 2;
			$projectOnGoingProgress = $newArray['projectOnGoingProgress'];
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



  <br>
  <div class="container">
<form class="form-horizontal" action="admin/updateProject.php" method="post">
<h1 style="text-align: center">Client Information</h1>
<input type="hidden" name="userID"value="<?php echo $userID ?>">
 <div class="form-group">
    <label class="control-label col-sm-2" for="email">Client Name:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="username" placeholder="Enter Client Name" value="<?php echo $userName ?>">
    </div>
  </div>
  <br>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Client Address:</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" name="address" placeholder="Enter Address" value="<?php echo $userAddress ?>">
    </div>
  </div>
 <br>
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Client Email:</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" name="email" placeholder="Enter email" value="<?php echo $userEmail ?>">
    </div>
  </div>
  <br>
  <div class="form-group">
    <label class="control-label col-sm-2" name="pwd">Client Password:</label>
    <div class="col-sm-10"> 
      <input type="password" class="form-control" name="pwd" placeholder="Enter password" value="<?php echo $userPassword ?>">
    </div>
  </div>
  <br>

<h1 style="text-align: center">Project Information</h1>
 <input type="hidden" name="projectID"value="<?php echo $projectID ?>">
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Project Name:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="projectName" placeholder="Enter Project Name" value="<?php echo $projectName ?>">
    </div>
  </div>
  <br>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Project Short Name:</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" name="projectStName" placeholder="Enter Project Short Name" value="<?php echo $projectStName ?>">
    </div>
  </div>
 <br>
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Project Type:</label>
    <div class="col-sm-10">
      <select class="form-control" name="projectType" value="<?php echo $projectType ?>">
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
      <input type="text" class="form-control" name="projectAddress" placeholder="Enter Project Address" value="<?php echo $projectAddress ?>">
    </div>
  </div>
 <br>
 <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Project Short Description:</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" name="projectStDesc" placeholder="Enter Project Short Description" value="<?php echo $projectStDesc ?>">
    </div>
  </div>
 <br>
 <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Project Long Description:</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" name="projectLgDesc" placeholder="Enter Project Long Description" style="height: 100px" value="<?php echo $projectLgDesc ?>">
    </div>
  </div>
 <br>
  
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Project State:</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" name="projectState" placeholder="Enter Project Long Description" value="<?php echo $projectState ?>">
    </div>
  </div>
 <br>
 
 <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Project Progress:</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" name="projectOnGoingProgress" placeholder="Enter Project Long Description" value="<?php echo $projectOnGoingProgress ?>">
    </div>
  </div>
 <br>
 
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Project Start Date:</label>
    <div class="col-sm-10"> 
      <input type="date" class="form-control" name="projectStartDate" placeholder="Enter Start Date" value="<?php echo $projectStartDate ?>">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Estimated End Date:</label>
    <div class="col-sm-10"> 
      <input type="date" class="form-control" name="projectEndDate" placeholder="Enter End Date" value="<?php echo $projectEndDate ?>">
    </div>
  </div>

  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Update Record</button>
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
