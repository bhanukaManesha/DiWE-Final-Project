<!-- Starting the Session -->
<?php 
  
  session_start();
  
?>

<!-- Ending the Session -->

<!doctype html>

<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Construction Company Website for building residences">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <link rel="shortcut icon" href="images/favicon.ico">
    <title>ABOUT US | SAMAN GAMAGE CIVIL ENGINEERS AND CONTRACTORS</title>
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
  			width: 100%;
		}
		.demo-card-wide > .mdl-card__title {
		  	color: #fff;
		  	height: 90px;
			background-position: center;
			background-color: forestgreen;
		}
		.demo-card-wide > .mdl-card__menu {
		  color: #fff;
		}
	   .material-icons.md-48 { font-size: 48px; }
	  	
</style>
   <!-- End Style tag -->
  
	  
  </head>
  
  
<body>
   
<div class="demo-layout-transparent mdl-layout mdl-js-layout">

<?php
	 
	include('includes/navbar.php');
	 
?>
  <h1 style="font-size: 3em;text-align: center;font-family: Gill Sans, Gill Sans MT, Myriad Pro, DejaVu Sans Condensed, Helvetica, Arial,' sans-serif';" class="animated fadeIn">ABOUT US</h1>
<?php 
if (isset($_GET['type'])) {
	if ($_GET["type"]=="sucess"){
?>
		<div class="alert alert-success animated fadeIn" role="alert" style="text-align: center">Your request has been sent sucessfully. Our Team will reply to you soon.</div>
	
<?php 
	}else if ($_GET["type"]=="fail"){
?>
		<div class="alert alert-danger animated fadeIn" role="alert" style="text-align: center"> Something went wrong. Please resend your request.</div>
<?php 
	}	
}
?>
  <main>
  <div id="googleMap" style="height:600px;" class="animated fadeIn"></div> 
<br>
<div class="jumbotron container-fluid animated fadeIn">
  <h2 class="text-center" style="text-align: center;font-family: Gill Sans, Gill Sans MT, Myriad Pro, DejaVu Sans Condensed, Helvetica, Arial,' sans-serif';">AWARDS AND ACHEIVEMENTS</h2>
  <br>
  <div class="mdl-grid">
  <div class="mdl-cell mdl-cell--4-col text-center"><i class="material-icons md-48">thumb_up</i></div>
  <div class="mdl-cell mdl-cell--4-col text-center"><i class="material-icons md-48">language</i></div>
  <div class="mdl-cell mdl-cell--4-col text-center"><i class="material-icons md-48">library_books</i></div>
</div>
  <div class="mdl-grid">
  <div class="mdl-cell mdl-cell--4-col text-center" style="font-family: Gill Sans, Gill Sans MT, Myriad Pro, DejaVu Sans Condensed, Helvetica, Arial,' sans-serif';font-size: 1.5em;">Awarded the Best House in Asia</div>
  <div class="mdl-cell mdl-cell--4-col text-center" style="font-family: Gill Sans, Gill Sans MT, Myriad Pro, DejaVu Sans Condensed, Helvetica, Arial,' sans-serif';font-size: 1.5em;">Construction21 Best House<br>(Energy And Hot Climates)</div>
  <div class="mdl-cell mdl-cell--4-col text-center" style="font-family: Gill Sans, Gill Sans MT, Myriad Pro, DejaVu Sans Condensed, Helvetica, Arial,' sans-serif';font-size: 1.5em;">Architect Digest <br>(Nature)</div>
</div>
</div>
 <br>
<div class="container" >
<div class="demo-card-wide mdl-card mdl-shadow--2dp">
  <div class="mdl-card__title">
    <h1 class="mdl-card__title-text" style="margin: auto;font-family:Segoe, Segoe UI, DejaVu Sans, Trebuchet MS, Verdana,' sans-serif';">Our Vision</h1>
  </div>
  
  <div class="mdl-card__actions mdl-card--border">
   <br>
    <p class="container" style="font-family:Segoe, Segoe UI, DejaVu Sans, Trebuchet MS, Verdana,' sans-serif';font-size: 1em;">Be Sri Lanka's premier engineering, construction, and project management organization by achieving extraordinary results for our customers, building satisfying careers for our people, and earning a fair return on the value we deliver.</p>
  </div>
</div>


<br>

<div class="demo-card-wide mdl-card mdl-shadow--2dp">
  <div class="mdl-card__title">
    <h1 class="mdl-card__title-text" style="margin: auto;font-family:Segoe, Segoe UI, DejaVu Sans, Trebuchet MS, Verdana,' sans-serif';">Our Mission</h1>
  </div>
  
  <div class="mdl-card__actions mdl-card--border">
   <br>
    <p class="container" style="font-family:Segoe, Segoe UI, DejaVu Sans, Trebuchet MS, Verdana,' sans-serif';font-size: 1em;">
	Our mission is to provide builder services that surpass our Clients’ expectations.  We will accomplish this through the selective use of responsible subcontractors, by hiring and retaining first class employees, and by approaching the building process with honesty and integrity.  This will provide the foundation for long term customer relations and growth.  We are committed to the success of our Clients, our business partners, and our employees.</p>
  </div>
</div>


</div>
<br><br>
<div id="contact" class="jumbotron container">

<h2 class="text-center" style="font-size: 3em;text-align: center;font-family: Gill Sans, Gill Sans MT, Myriad Pro, DejaVu Sans Condensed, Helvetica, Arial,' sans-serif';">CONTACT US</h2>
 <br>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> 15/1, Samudradevi Road, Ethul Kotte, LK</p>
      <p><span class="glyphicon glyphicon-phone"></span> +94 777323082</p>
      <p><span class="glyphicon glyphicon-envelope"></span> samanbgamage@gmail.com</p>
    </div>
    <div class="col-sm-7">
     <form action="mail.php" method="post">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <input class="btn btn-default pull-right" type="submit" value="Send">
        </div>
      </div>
		</form>
    </div>
  </div>
 </main>
</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-2.1.4.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>   
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <script>
		function myMap() {
			var myCenter = new google.maps.LatLng(6.897827, 79.905229);
			var mapProp = {center:myCenter, zoom:12, scrollwheel:false, draggable:true, mapTypeId:google.maps.MapTypeId.ROADMAP};
			var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
			var marker = new google.maps.Marker({position:myCenter});marker.setMap(map);
			
			
		}
	</script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCHkNkWR2VzrE8voRQPgOH8BrQ5MW9SM-Y&callback=myMap"></script>
  </body>
</html>