<?php 
  
  session_start();
  
  
if( !isset($_SESSION['role'])){
	if ($_SESSION['role'] !== "User"){
	echo "<script>
	alert('Please Login');
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
   
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Construction Company Website for building residences">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <link rel="shortcut icon" href="images/favicon.ico">
    <title>MY PROJECT | SAMAN GAMAGE CIVIL ENGINEERS AND CONTRACTORS</title>

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
	 
	 	<?php 
	  
	///////////////////////////////////////////////////////////////////////////////////////
	include("../includes/dbConfig.php");
	$userID = $_SESSION["userID"];
	$sql="SELECT * from project where project.projectUserID=$userID";
	$result=mysqli_query($conn,$sql) or die(mysqli_error());
	$num=mysqli_num_rows($result);
	$no=0;
	if($result && $num >0){
		
		while ($newArray = mysqli_fetch_array($result)) { 
		
		$projectID=$newArray['projectID'];
		$projectName=$newArray['projectName'];
		$projectStName=$newArray['projectStName'];
		$projectType=$newArray['projectType']; 
		$projectAddress=$newArray['projectAddress']; 
		$projectStDesc=$newArray['projectStDesc']; 
		$projectlgDesc=$newArray['projectlgDesc']; 
		}
	}
	
	include("../includes/dbConfig.php");
	$userID = $_SESSION["userID"];
	$sql="SELECT * from projectOnGoing,projectImage where projectOnGoing.projectID=$projectID and projectImage.projectID=$projectID";
	$result=mysqli_query($conn,$sql) or die(mysqli_error());
	$num=mysqli_num_rows($result);
	$no=0;
	if($result && $num >0){
		
		while ($newArray = mysqli_fetch_array($result)) { 
		
		$projectOnGoingProgress=$newArray['projectOnGoingProgress'];
		$projectOnGoingDateStarted=$newArray['projectOnGoingDateStarted'];
		$projectOnGoingDateFinish=$newArray['projectOnGoingDateFinish'];
		$projectImagesRecent1=$newArray['projectImageRecent1'];
		$projectImagesRecent2=$newArray['projectImageRecent2'];
		$projectImagesRecent3=$newArray['projectImageRecent3'];
		$projectImagesRecent4=$newArray['projectImageRecent4'];
		$projectImagesRecent5=$newArray['projectImageRecent5'];
		$projectCover=$newArray['projectCover'];		
		}
	}
?>
	 
	<br>
	<!-- jumbotron-->
  	<div class="jumbotron" >
  	<h1 style="text-align: center"> <?php echo $projectName ?> </h1>
  	<p style="text-align: center">  <?php echo $projectAddress ?></p>
  
 
  	</div>
  	<!-- end of jumbotron -->
  	<div class="container">
  		<h1 style="text-align: center">Progress Bar </h1>
  		
  		<br>
  	
  	<!-- Simple MDL Progress Bar -->
	<div id="p1" class="mdl-progress mdl-js-progress" style="height:20px;width:80%;margin-left:auto; margin-right:auto;"> </div>
	
  	<br>
	<br>
	 
	<table class="table container">
	  	<tr>
	  		<th>Project Short Name</th>
	  		<td><?php echo $projectStName ?></td>
	  	</tr>
	  	<tr>
	  		<th>Project Start Date</th>
	  		<td><?php echo $projectOnGoingDateStarted ?></td>
	  	</tr>
	  	<tr>
	  		<th>Esitimated Project End Date</th>
	  		<td><?php echo $projectOnGoingDateFinish ?></td>
	  	</tr>
	  </table>
	  </div>
	  
	  <h1 style="text-align: center">Description </h1>
	  <br>
	  <div class="container" style="text-align: justify">
	  <?php echo $projectlgDesc ?>
	  </div>
	  
	  <h1 style="text-align: center">Recent Images</h1>
	  <br>
	 	<img src="<?php echo $projectImagesRecent1 ?>" style="margin: auto">
	 	<br>
	 	<img src="<?php echo $projectImagesRecent2 ?>" style="margin: auto">
	 	<br>
	 	<img src="<?php echo $projectImagesRecent3 ?>" style="margin: auto">
	 	<br>
	 	<img src="<?php echo $projectImagesRecent4 ?>" style="margin: auto">
	 	<br>
	 	<img src="<?php echo $projectImagesRecent5 ?>" style="margin: auto">
	 	<br>
	  </div>
	 
<script>
		var progress = <?php echo $projectOnGoingProgress ?>
		
  		document.querySelector('#p1').addEventListener('mdl-componentupgraded', function() {
    	this.MaterialProgress.setProgress(progress);
  		
		});
</script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-2.1.4.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>   
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  </body>
</html>
