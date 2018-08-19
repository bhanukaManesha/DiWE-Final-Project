<!-- Starting the Session -->
<?php 
  
  session_start();
  
?>

<!-- Ending the Session -->

<!doctype html>

<html lang="en">
  <head>
   <?php
	 
	 include('includes/baseurl.php')
	 
	 ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Construction Company Website for building residences">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <link rel="shortcut icon" href="images/favicon.ico">
    
    <title>HOME | SAMAN GAMAGE CIVIL ENGINEERS AND CONTRACTORS</title>

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
  			background: url(images/panaramichouse.jpg);
			background-size:cover; 
			background-position:bottom;
		}
		.demo-layout-transparent .mdl-layout__header,
		.demo-layout-transparent .mdl-layout__drawer-button {
  		/* This background is dark, so we set text to white. Use 87% black instead if
    	your background is light. */
  		color:white;
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
    
<div class="demo-layout-transparent mdl-layout mdl-js-layout" >
  
<!-- Starting the Navbar -->
<?php
	 
	 include('includes/navbar.php')
	 
?>
<!-- Ending the Navbar -->  
  <main class="mdl-layout__content">
	 <div class="container animated fadeIn" style="text-align: center;color: #FFF;">
	  		
	  	<h1 id="txt" style="font-size: 100px;padding-top: 50px;"></h1>
	  		
	  	<p id="time" style="font-size: 50px;display: inline"></p>
	  		
	  	<p style="display: inline; font-size: 50px;" class="hidden-xs hidden-md hidden-sm">
	  	<?php if (isset($_SESSION['username'])){echo $_SESSION['username'];}else{echo " ";} ?></p>
	  	
	  	<p style="display: block; font-size: 30px;padding-top: 20px;" class="mdl-layout--small-screen-only hidden-lg"><?php if (isset($_SESSION['username'])){echo $_SESSION['username'];}else{echo " ";} ?></p>
	  		 		
	</div>
  </main>
</div>
  
<script>
	var today = new Date();
	var h = today.getHours();
	if (h>0 && h<12){
		console.log(h);
		document.getElementById('time').innerHTML ="Good Morning ";
	}else if(h>=12 && h<=15){
		console.log(h);
		document.getElementById('time').innerHTML ="Good Afternoon ";
	}else if(h>15 && h<=24){
		console.log(h);
		document.getElementById('time').innerHTML ="Good Evening ";
	}	  
</script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-2.1.4.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>   
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  </body>
</html>
