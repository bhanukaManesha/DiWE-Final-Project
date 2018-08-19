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
  			width: 250px;
		}
		.demo-card-wide > .mdl-card__title {
		  color: #fff;
		  height: 200px;
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
	include("../includes/dbConfig.php");
	  
	$sql="SELECT project.* FROM project WHERE PROJECT.PROJECTSTATE=1 ORDER BY project.projectID";

	$result=mysqli_query($conn,$sql) or die(mysqli_error());
	$num=mysqli_num_rows($result);
	
	$no=0;
	
	if($result && $num >0){
		 
		while ($newArray = mysqli_fetch_array($result)) { 
		$no ++;
		?>
     <br><br>   
	<div class="container animated fadeInRightBig">
	 <div class="demo-card-wide mdl-card mdl-shadow--2dp" style="margin-right:20px;width: 100%;margin: auto">
	  <div class="mdl-card__title" style="background-color:darkslategrey">
		<h2 class="mdl-card__title-text" style="font-size: 72px"><?php echo $newArray['projectStName']; ?></h2>
	  </div>
	  <div class="mdl-card__actions mdl-card--border">
		<a href="admin/lookAtProgress.php?projectID=<?php echo $newArray['projectID']; ?>" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
		  Edit Project
		</a>
	  </div>

	  </div>
	</div>
   
    <?php }?> 
	<?php
	}else{
		echo "No result";
		}
	?>

      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-2.1.4.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>   
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  </body>
</html>
