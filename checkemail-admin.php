<?php

$con = mysqli_connect('localhost','root','','eveinfo1');



$sql = "UPDATE adminmaster SET a_password='$_POST[a_password]' WHERE a_email='$_POST[a_email]'";

if(mysqli_query($con,$sql)){
	echo("<script>alert('Password successfully Updated')</script>");
	echo("<script>window.location = 'login.php';</script>");
}
else {
	echo "Not Updated";
}
?>