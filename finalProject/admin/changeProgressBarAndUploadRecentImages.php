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
  error_reporting(0);

	 //include('../includes/baseurl.php')

  //////////////////////////
  
$projectOnGoingProgress = $_POST["slider"];
$projectID = $_POST["projectID"];


	include("../includes/dbConfig.php");
	$sql="SELECT projectStName from project WHERE projectID=$projectID LIMIT 1";
	$result=mysqli_query($conn,$sql) or die(mysqli_error());
	$num=mysqli_num_rows($result);
	
	$no=0;
	
	if($result && $num >0){
		
		while ($newArray = mysqli_fetch_array($result)) { 
		
				
			$projectStName=$newArray["projectStName"];
			
		}
	}
	include("../includes/dbConfig.php");
	$sql="SELECT * from projectImage WHERE projectID=$projectID LIMIT 1";
	$result=mysqli_query($conn,$sql) or die(mysqli_error());
	$num=mysqli_num_rows($result);
	
	$no=0;
	
	if($result && $num >0){
		
		while ($newArray = mysqli_fetch_array($result)) { 
		
			 $photofile1=$newArray["projectImageRecent1"];
			 $photofile2=$newArray["projectImageRecent2"];	
			 $photofile3=$newArray["projectImageRecent3"];	
			 $photofile4=$newArray["projectImageRecent4"];	
			 $photofile5=$newArray["projectImageRecent5"];	
			
			}

		}

	//////////////////////////////////////////////////////////////////////////////////////////////////////

$target_dir = "../houses/$projectStName/";
$photo_dir = "houses/$projectStName/";
$target_file1 = $target_dir . basename($_FILES["fileToUpload1"]["name"]);
$photo_file1 = $photo_dir . basename($_FILES["fileToUpload1"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file1,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check1 = getimagesize($_FILES["fileToUpload1"]["tmp_name"]);
    if($check1 !== false) {
         "File is an image - " . $check1["mime"] . ".";
        $uploadOk = 1;
    } else {
         "File is not an image.";
		$photo_file1=$photofile1;
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file1)) {
     "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload1"]["size"] > 500000) {
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
    if (move_uploaded_file($_FILES["fileToUpload1"]["tmp_name"], $target_file1)) {
         "The file ". basename( $_FILES["fileToUpload1"]["name"]). " has been uploaded.";
    } else {
         "Sorry, there was an error uploading your file.";
    }
}
  
  
////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////

$target_dir = "../houses/$projectStName/";
$photo_dir = "houses/$projectStName/";
$target_file2 = $target_dir . basename($_FILES["fileToUpload2"]["name"]);
$photo_file2 = $photo_dir . basename($_FILES["fileToUpload2"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file2,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check2 = getimagesize($_FILES["fileToUpload2"]["tmp_name"]);
    if($check2 !== false) {
         "File is an image - " . $check2["mime"] . ".";
        $uploadOk = 1;
    } else {
         "File is not an image.";
		$photo_file2=$photofile2;
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file2)) {
     "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload2"]["size"] > 500000) {
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
    if (move_uploaded_file($_FILES["fileToUpload2"]["tmp_name"], $target_file2)) {
         "The file ". basename( $_FILES["fileToUpload2"]["name"]). " has been uploaded.";
    } else {
         "Sorry, there was an error uploading your file.";
    }
}
  
  
////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////

$target_dir = "../houses/$projectStName/";
$photo_dir = "houses/$projectStName/";
$target_file3 = $target_dir . basename($_FILES["fileToUpload3"]["name"]);
$photo_file3 = $photo_dir . basename($_FILES["fileToUpload3"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file3,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check3 = getimagesize($_FILES["fileToUpload3"]["tmp_name"]);
    if($check3 !== false) {
         "File is an image - " . $check3["mime"] . ".";
        $uploadOk = 1;
    } else {
         "File is not an image.";
		$photo_file3=$photofile3;
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file3)) {
     "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload3"]["size"] > 500000) {
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
    if (move_uploaded_file($_FILES["fileToUpload3"]["tmp_name"], $target_file3)) {
         "The file ". basename( $_FILES["fileToUpload3"]["name"]). " has been uploaded.";
    } else {
         "Sorry, there was an error uploading your file.";
    }
}
  
  
////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////

$target_dir = "../houses/$projectStName/";
$photo_dir = "houses/$projectStName/";
$target_file4 = $target_dir . basename($_FILES["fileToUpload4"]["name"]);
$photo_file4 = $photo_dir . basename($_FILES["fileToUpload4"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file4,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check4 = getimagesize($_FILES["fileToUpload4"]["tmp_name"]);
    if($check4 !== false) {
         "File is an image - " . $check4["mime"] . ".";
        $uploadOk = 1;
    } else {
         "File is not an image.";
		$photo_file4=$photofile4;
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file4)) {
     "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload4"]["size"] > 500000) {
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
    if (move_uploaded_file($_FILES["fileToUpload4"]["tmp_name"], $target_file4)) {
         "The file ". basename( $_FILES["fileToUpload4"]["name"]). " has been uploaded.";
    } else {
         "Sorry, there was an error uploading your file.";
    }
}
  
  
////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////

$target_dir = "../houses/$projectStName/";
$photo_dir = "houses/$projectStName/";
$target_file5 = $target_dir . basename($_FILES["fileToUpload5"]["name"]);
$photo_file5 = $photo_dir . basename($_FILES["fileToUpload5"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file5,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check5 = getimagesize($_FILES["fileToUpload5"]["tmp_name"]);
    if($check5 !== false) {
         "File is an image - " . $check5["mime"] . ".";
        $uploadOk = 1;
    } else {
         "File is not an image.";
		 $photo_file5 = $photofile5;
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file5)) {
     "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload4"]["size"] > 500000) {
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
    if (move_uploaded_file($_FILES["fileToUpload5"]["tmp_name"], $target_file5)) {
         "The file ". basename( $_FILES["fileToUpload5"]["name"]). " has been uploaded.";
    } else {
         "Sorry, there was an error uploading your file.";
    }
}
  
  
////////////////////////////////////////////////////////////////////////////////////////////////////////



	include("../includes/dbConfig.php");

	$sql="UPDATE projectOnGoing SET projectOnGoingProgress='$projectOnGoingProgress' WHERE projectID =$projectID";
	$result=mysqli_query($conn,$sql) or die(mysqli_error());

	$sql="UPDATE projectImage SET projectImageRecent1='$photo_file1',projectImageRecent2='$photo_file2',projectImageRecent3='$photo_file3',projectImageRecent4='$photo_file4',projectImageRecent5='$photo_file5' WHERE projectID =$projectID";
	$result=mysqli_query($conn,$sql) or die(mysqli_error());

	





	if($result){
	 echo "<script>window.location='index.php?sucess=yes&type=updateprogress';</script>";
	}else{
	 echo "<script>alert('Something went wrong');window.location='admin/addNewProject.php';</script>";
	
		}



?>