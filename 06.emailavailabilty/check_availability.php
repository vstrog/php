<?php 
require_once("config.php");
//code check email
if(!empty($_POST["emailid"])) {
$result = mysqli_query($con,"SELECT count(*) FROM email_availabilty WHERE email='" . $_POST["emailid"] . "'");
$row = mysqli_fetch_row($result);
$email_count = $row[0];
if($email_count>0) echo "<span style='color:#ff0000'> Email Already Exit .</span>";
else echo "<span style='color:#00ff00'> Email Available.</span>";
}
// End code check email

//Code check user name
if(!empty($_POST["username"])) {
	$result1 = mysqli_query($con,"SELECT count(*) FROM email_availabilty WHERE username='" . $_POST["username"] . "'");
	$row1 = mysqli_fetch_row($result1);
	$user_count = $row1[0];
	if($user_count>0) echo "<span style='color:#ff0000'> Username already exit .</span>";
	else echo "<span style='color:#00ff00'> Username Available.</span>";
}
// End code check username
?>
