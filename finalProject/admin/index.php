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
  <div class="jumbotron">
  <h1 style="text-align: center"> ADMIN DASHBOARD </h1>
  <p style="text-align: center">  <?php echo $_SESSION["username"] ?> </p>

  </div>
<!-- end of jumbotron -->

<?php
if (isset($_GET['sucess'])) {
	if ($_GET["sucess"]=="yes" && $_GET["type"]=="clientproject"){
?>
		<div class="alert alert-success" role="alert" style="text-align: center"><b>Well done! </b> You successfully added a new client and project.</div>
	
<?php 
	}else if ($_GET["sucess"]=="yes" && $_GET["type"]=="editclientproject"){
?>
		<div class="alert alert-success" role="alert" style="text-align: center"><b>Well done! </b> You successfully editted client and project.</div>
<?php 
	}else if ($_GET["sucess"]=="yes" && $_GET["type"]=="updateprogress"){
?>
		<div class="alert alert-success" role="alert" style="text-align: center"><b>Well done! </b> You successfully updated the project progress and pictures.</div>
	
<?php }} ?>
<div class="container">
<!-- Raised button with ripple -->
	<a href="admin/addNewClient.php" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--primary" style="width: 100%;text-decoration: none;visibility: visible;padding: 0px;">ADD NEW PROJECT</a>

<br><br>

<!-- Raised button with ripple -->
	<a href="admin/editRecord.php" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" style="width: 100%;text-decoration: none;visibility: visible;padding: 0px">EDIT PROJECT</a>
	
<br><br>

<!-- Raised button with ripple -->
	<a href="admin/updateProgressImage.php" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" style="width: 100%;text-decoration: none;visibility: visible;padding: 0px">UPDATE PROGRESS AND UPLOAD RECENT IMAGES</a>
<br><br>
<h1 style="text-align: center">Web Inquiry</h1>


<div class="container">
  <table class="table table-striped table-inverse">
  <thead>
    <tr>
      <th>Name</th>
      <th>Email</th>
      <th>Message</th>
      <th>Time</th>
    </tr>
  </thead>
  <tbody>
   <?php 
	include("../includes/dbConfig.php"); 
	$sql="SELECT * FROM mail ORDER BY `mail`.`mailTime` DESC LIMIT 10";

	$result=mysqli_query($conn,$sql) or die(mysqli_error());
	$num=mysqli_num_rows($result);
	
	$no=0;
	
	if($result && $num >0){
		 
		while ($newArray = mysqli_fetch_array($result)) { 
		$no ++;
?>

    <tr>
      <th scope="row"><?php echo $newArray['mailName']; ?></th>
      <td><?php echo $newArray['mailEmail']; ?></td>
      <td><?php echo $newArray['mailMessage']; ?></td>
      <td><?php echo $newArray['mailTime']; ?></td>
    </tr>
  <?php
		}}
	?>
  </tbody>
</table>  
 </div>
   </div>
   </div>	 
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-2.1.4.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>   
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  </body>
</html>
