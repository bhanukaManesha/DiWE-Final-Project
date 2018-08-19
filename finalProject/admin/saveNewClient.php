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
  

$userName=$_POST["username"];
$userAddress=$_POST['address'];
$userEmail=$_POST['email'];
$userPassword=$_POST['pwd'];
$userRole = 2;
 
	include("../includes/dbConfig.php");
	$sql="INSERT INTO  user(userName,userAddress,userEmail,userPassword,userRole)VALUES('$userName','$userAddress','$userEmail','$userPassword','$userRole')";
	$result=mysqli_query($conn,$sql) or die(mysqli_error());

	
		if($result){
	echo "<script>window.location='addNewProject.php?userName=$userName';</script>";
		}else{
		echo "<script>alert('Something went wrong');window.location='admin/addNewProject.php';</script>";
		
		}
	?>
