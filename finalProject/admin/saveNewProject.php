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
	
	
  //////////////////////////
  
$userID = $_POST["projectClientID"];
$userName=$_POST["projectClientName"];


$projectName=$_POST["projectName"];
$projectStName=$_POST['projectStName'];
$projectType=$_POST['projectType'];
$projectAddress=$_POST['projectAddress'];
$projectStDesc=$_POST["projectStDesc"];
$projectLgDesc=$_POST['projectLgDesc'];
$projectStartDate=$_POST['projectStartDate'];
$projectEndDate=$_POST['projectEndDate'];
$projectState=1;
$projectOnGoingProgress=0;


mkdir("../houses/$projectStName/");


$target_dir = "../houses/$projectStName/";
$photo_dir = "houses/$projectStName/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$photo_file = $photo_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}


// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        "Sorry, there was an error uploading your file.";
    }
}
  
  
  //////////////////////////





	include("../includes/dbConfig.php");
	$sql="INSERT INTO  project(projectName,projectStName,projectType,projectAddress,projectUserID,projectState,projectStDesc,projectlgDesc)VALUES('$projectName','$projectStName','$projectType','$projectAddress','$userID','$projectState','$projectStDesc','$projectLgDesc')";
	$result=mysqli_query($conn,$sql) or die(mysqli_error());
	
	
	$sql="SELECT * from project WHERE project.projectName=\"$projectName\" LIMIT 1";
	$result=mysqli_query($conn,$sql) or die(mysqli_error());
	$num=mysqli_num_rows($result);
	
	$no=0;
	
	if($result && $num >0){
		
		while ($newArray = mysqli_fetch_array($result)) { 
		
		$projectID=$newArray['projectID'];		
		}
	}


	$sql="INSERT INTO  projectOnGoing(projectID,projectOnGoingProgress,projectOnGoingDateStarted,projectOnGoingDateFinish)VALUES('$projectID','$projectOnGoingProgress','$projectStartDate','$projectEndDate')";
	$result=mysqli_query($conn,$sql) or die(mysqli_error());

	$sql="INSERT INTO projectImage(projectID,projectCover)VALUES('$projectID','$photo_file')";
	$result=mysqli_query($conn,$sql) or die(mysqli_error());




	if($result){
	echo "<script>window.location='index.php?sucess=yes&type=clientproject';</script>";
	}else{
	echo "<script>alert('Something went wrong');window.location='admin/addNewProject.php';</script>";
	
		}

?>