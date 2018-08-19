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
<?php

$userID = $_POST["userID"];
$userName=$_POST["username"];
$userAddress=$_POST['address'];
$userEmail=$_POST['email'];
$userPassword=$_POST['pwd'];
$projectID=$_POST["projectID"];
$projectName=$_POST["projectName"];
$projectStName=$_POST['projectStName'];
$projectType=$_POST['projectType'];
$projectAddress=$_POST['projectAddress'];
$projectStDesc=$_POST["projectStDesc"];
$projectLgDesc=$_POST['projectLgDesc'];
$projectStartDate=$_POST['projectStartDate'];
$projectEndDate=$_POST['projectEndDate'];
$projectState=$_POST['projectState'];
$projectOnGoingProgress=$_POST['projectOnGoingProgress'];


	include("../includes/dbConfig.php");


	$sql="UPDATE user SET userName ='$userName', userAddress='$userAddress', userEmail='$userEmail', userPassword= '$userPassword' WHERE user.userID = '$userID' ";
	$result=mysqli_query($conn,$sql) or die(mysqli_error());
	
	$sql="UPDATE project SET projectName ='$projectName', projectStName='$projectStName', projectType='$projectType', projectAddress= '$projectAddress', projectState='$projectState', projectStDesc='$projectStDesc', projectlgDesc='$projectLgDesc' WHERE project.projectID = '$projectID' ";
	$result=mysqli_query($conn,$sql) or die(mysqli_error());
	
	$sql="UPDATE projectOnGoing SET projectOnGoingProgress ='$projectOnGoingProgress', projectOnGoingDateStarted='$projectStartDate', projectOnGoingDateFinish='$projectEndDate' WHERE projectOnGoing.projectID = '$projectID' ";
	$result=mysqli_query($conn,$sql) or die(mysqli_error());
	
	if($result){
	echo "<script>window.location='index.php?sucess=yes&type=editclientproject';</script>";
	}else{
	echo "<script>alert('Something went wrong');window.location='admin/addNewProject.php';</script>";
		
		}

?>