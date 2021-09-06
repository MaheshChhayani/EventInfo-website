<?php
include('connect-db.php');
	

if(isset($_POST['submit_password']) && $_POST['email'] && $_POST['password'])
{
  $email=$_POST['email'];
  $pass=$_POST['password'];
  $user=$_POST['user'];
  if($user == "admin"){
    $sql= "UPDATE `adminmaster` SET  a_password='$pass' WHERE md5(a_email) = '$email'";
    mysqli_query($con,$sql);
  }
  else if($user=="userd"){
    $sql= "UPDATE `usermaster` SET  u_password='$pass' WHERE md5(u_email) = '$email'";
    mysqli_query($con,$sql);
  }
 

  header('Location: index.php');
}
?>