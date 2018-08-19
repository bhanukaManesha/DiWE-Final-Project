<?php
session_start();
$email="";
$password="";
 if (isset($_POST['email']) && isset($_POST['password']) ){

	$email= $_POST['email'];
	$password= $_POST['password'];

 	}
	//////////////////////////////////////////////////////////////////////////////////////////////
	include("../includes/dbConfig.php");
	$sql="SELECT  user.*,role.roleType FROM user,role where  user.userEmail ='$email' AND user.userPassword='$password' AND user.userRole=role.roleID ORDER BY userID ASC LIMIT 1 "  ;
	$result=mysqli_query($conn,$sql) or die(mysqli_error());
	$num= mysqli_num_rows($result);

if($result && ($num>0) ){  
	  
	while($row = mysqli_fetch_array($result)){

	  $_SESSION['username']= $row['userName'];
	  $_SESSION['email']= $row['userEmail'];
	  $_SESSION['userID']= $row['userID'];
	  $_SESSION['role']= $row['roleType'];
	  
	  }
	
	 	echo "<script type='text/javascript'>window.location='../index.php';</script>";  
	
	  }else{
			
		echo "<script>alert('Invalid Login Details. Please Enter Correct Email and Password');window.location='index.php';</script>";

	}
		
 ?>