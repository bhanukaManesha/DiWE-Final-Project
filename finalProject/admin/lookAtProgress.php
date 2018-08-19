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

$projectID=$_GET["projectID"];

	include("../includes/dbConfig.php");
	$sql="SELECT * from projectOnGoing where projectOnGoing.projectID=$projectID LIMIT 1";

	$result=mysqli_query($conn,$sql) or die(mysqli_error());
	$num=mysqli_num_rows($result);
	
	$no=0;
	
	if($result && $num >0){
		
		while ($newArray = mysqli_fetch_array($result)) { 
		$projectProgress=$newArray['projectOnGoingProgress']; 
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
<form class="form-horizontal" action="admin/changeProgressBarAndUploadRecentImages.php" method="post" enctype="multipart/form-data">
<h1 style="text-align:center">Update Progress and Upload Recent Images</h1>
<br>

<h4 style="text-align:center">Please Update the Progress by adjusting the slider:</h4>
<br>
<h4 id="output" style="text-align:center"><?php echo $projectProgress ?></h4>
<!-- Slider with Starting Value -->
<input class="mdl-slider mdl-js-slider" type="range" name ="slider" id="slider" min="0" max="100" value="<?php echo $projectProgress ?>" tabindex="0" onMouseMove="update()">
<br><br>

<input type="hidden" name="projectID" value="<?php echo $projectID ?>">

<h4 style="text-align:center">Please Upload the Recent Photos:</h4>
<h6 style="text-align:center">Please Select all Five Files</h6>
<br>
<div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Recent Image 1:</label>
    <div class="col-sm-10"> 
      <input type="file" class="form-control" name="fileToUpload1" id="fileToUpload" placeholder="Upload Cover Photo" accept="image/*">
    </div>
  </div>
  
 <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Recent Image 2:</label>
    <div class="col-sm-10"> 
      <input type="file" class="form-control" name="fileToUpload2" id="fileToUpload" placeholder="Upload Cover Photo" accept="image/*">
    </div>
  </div>
  
  
 <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Recent Image 3:</label>
    <div class="col-sm-10"> 
      <input type="file" class="form-control" name="fileToUpload3" id="fileToUpload" placeholder="Upload Cover Photo" accept="image/*">
    </div>
  </div>
  
 <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Recent Image 4:</label>
    <div class="col-sm-10"> 
      <input type="file" class="form-control" name="fileToUpload4" id="fileToUpload" placeholder="Upload Cover Photo" accept="image/*">
    </div>
  </div>
  
 <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Recent Image 5:</label>
    <div class="col-sm-10"> 
      <input type="file" class="form-control" name="fileToUpload5" id="fileToUpload" placeholder="Upload Cover Photo" accept="image/*">
    </div>
  </div>


<br>


  <div class="form-group"> 
    <div class="col-sm-offset-1 col-sm-10">
      <button style="width: 100%" type="submit" name="submit" class="btn btn-default">Update</button>
    </div>
  </div>
</form>
	  </div>
	  
	  <script>
		function update(){
		var slider = document.getElementById("slider").value;
	  	var output = document.getElementById("output");
		output.innerHTML = slider;
		}
	  </script>

      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-2.1.4.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>   
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  </body>
</html>
