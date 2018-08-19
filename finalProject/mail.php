<?php

$name = $_POST["name"];
$email = $_POST["email"];


$msg ="Hi! Saman Gamage Constructions \n Email = ";
$msg.= $email;
$msg.="\n Name = ";
$msg.=$name."\n";
$msg.="Message = " . $_POST["comments"];
$msg;



$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: $email" . "\r\n";



$dbmsg = $_POST["comments"];
$dateAndTime = date("Y-m-d")." ".date("h:i:s");


include("includes/dbConfig.php");
$sql="INSERT INTO  mail(mailName,mailEmail,mailMessage,mailTime)VALUES('$name','$email','$dbmsg','$dateAndTime')";
$result=mysqli_query($conn,$sql) or die(mysqli_error());

/*
// This part is under testing and will be implemented in the final product
if(mail("samanbgamage@gmail.com","Website Inquiry",$dbmsg,$headers)){
	echo "<script>window.location='aboutus.php?type=sucess'</script>";
}else{
	echo "<script>window.location='aboutus.php?type=fail'</script>";
	}	
	
	
?>
*/
if($result){
	echo "<script>window.location='aboutus.php?type=sucess'</script>";
		}else{
	echo "<script>window.location='aboutus.php?type=fail'</script>";
		
		}
	?>

