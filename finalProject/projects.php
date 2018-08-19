<!-- Starting the Session -->
<?php 
  
  session_start();
  
?>

<!-- Ending the Session -->

<!doctype html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Construction Company Website for building residences">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <link rel="shortcut icon" href="images/favicon.ico">
    <title>PROJECTS | SAMAN GAMAGE CIVIL ENGINEERS AND CONTRACTORS</title>
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
   <!-- Start Script tag -->
    <script>
		function startTime() {
			var today = new Date();
			var h = today.getHours();
			var m = today.getMinutes();
			var s = today.getSeconds();
			var me = today.get
			m = checkTime(m);
			s = checkTime(s);
			document.getElementById('txt').innerHTML =
			h + ":" + m + ":" + s;
			var t = setTimeout(startTime, 500);
		}
		function checkTime(i) {
			if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
			return i;
		}
	  </script>
	  <!-- End Sciprt tag -->
	  
  </head>
  
  
<body onload="startTime()">
    
<div class="demo-layout-transparent mdl-layout mdl-js-layout">

<?php
	 
	include('includes/navbar.php');
	 
?>
  
  
<main>
  
  <h1 style="text-align: center;font-family: Gill Sans, Gill Sans MT, Myriad Pro, DejaVu Sans Condensed, Helvetica, Arial,' sans-serif';" class="animated bounceInUp">Completed</h1>
  
  <?php 
	include("includes/dbConfig.php");
	  
	$sql="SELECT project.*,projectImage.* FROM project,projectImage where project.projectState=0 and projectImage.projectID = project.projectID ORDER BY project.projectID";

	$result=mysqli_query($conn,$sql) or die(mysqli_error());
	$num=mysqli_num_rows($result);
	
	$no=0;
	
	if($result && $num >0){
		 
		while ($newArray = mysqli_fetch_array($result)) { 
		$no ++;
		?>
     
     
    <br>
     
	<div class="container animated bounceInUp">
		<div class="demo-card-wide mdl-card mdl-shadow--2dp" style="margin-right:30px;width: 100%">
			<div class="mdl-card__title" style="background: url('<?php echo $newArray['projectCover']; ?>') center / cover;">
				<h2 class="mdl-card__title-text"><?php echo $newArray['projectStName']; ?></h2>
	  		</div>
	  		<div class="mdl-card__supporting-text" style="font-size: 12px">
				<?php echo $newArray['projectStDesc']; ?>
	  		</div>
	 		<div class="mdl-card__actions mdl-card--border">
				<a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">View More</a>
	  		</div>
	  		<div class="mdl-card__menu">
				<button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
		  		<i class="material-icons">share</i>
				</button>
	  		</div>
	  	</div>
	</div>
    <?php } ?> 
	<?php
		}else{
			echo "No result";
		}
	?>
  
  <h1 style="text-align: center;font-family: Gill Sans, Gill Sans MT, Myriad Pro, DejaVu Sans Condensed, Helvetica, Arial,' sans-serif';" class="animated bounceInUp">On Going</h1>
  
  <?php 
	include("includes/dbConfig.php");
	  
	$sql="SELECT project.*,projectImage.* FROM project,projectImage where project.projectState=1 and projectImage.projectID = project.projectID ORDER BY project.projectID";

	$result=mysqli_query($conn,$sql) or die(mysqli_error());
	$num=mysqli_num_rows($result);
	
	$no=0;
	
	if($result && $num >0){
		 
		while ($newArray = mysqli_fetch_array($result)) { 
		$no ++;
		?>
     
     <br>
       
	<div class="container animated bounceInUp">
	 <div class="demo-card-wide mdl-card mdl-shadow--2dp" style="margin-right:30px;width: 100%">
	  <div class="mdl-card__title" style="background: url('<?php echo $newArray['projectCover']; ?>') center / cover;">
		<h2 class="mdl-card__title-text"><?php echo $newArray['projectStName']; ?></h2>
	  </div>
	  <div class="mdl-card__supporting-text" style="font-size: 12px">
		<?php echo $newArray['projectStDesc']; ?>
	  </div>
	  <div class="mdl-card__actions mdl-card--border">
		<a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">View More</a>
	  </div>
	  <div class="mdl-card__menu">
		<button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
		  <i class="material-icons">share</i>
		</button>
	  </div>
	  </div>
	</div>
    <?php } ?> 
	<?php
		}else{
		echo "No result";
		}
	?>

 </main>
</div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-2.1.4.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>   
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  </body>
</html>
