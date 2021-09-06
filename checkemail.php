<?php

$con = mysqli_connect('localhost','root','','eveinfo1');



$sql = "UPDATE usermaster SET u_password='$_POST[u_password]' WHERE u_email='$_POST[u_email]'";

if(mysqli_query($con,$sql)){
	echo("<script>alert('Password successfully Updated')</script>");
	echo("<script>window.location = 'login.php';</script>");
}
else {
	echo "Not Updated";
}
?>