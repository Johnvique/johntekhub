<?php
$name=$_POST['name'];
$email=$_POST['mail'];
$subject=$_POST['subject'];
$message=$_POST['sms'];

$connect=mysqli_connect("localhost","root","") or die(mysqli_error());
if (!$connect) {
	echo "not connected";
}else{
	mysqli_select_db($connect,"contact_jhub");

	$query="INSERT INTO `contact_form`(`name`, `mail`, `subject`, `sms`) VALUES ('$name','$email','$subject','$message')";

	$execute=mysqli_query($connect,$query) or die(mysqli_error($connect));
	if (!$execute) {
		mysqli_error($connect);
	}

	$select_query="SELECT * FROM `contact_form` WHERE `name`='$name' AND `email`='$email' AND `subject`='$subject' AND `message`='$message'";

	$select_execute=mysqli_query($connect,$select_execute) or die("select_error"); 
}
 

?>