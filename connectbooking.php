<?php

include('connect-db.php');
 session_start();

if(isset($_SESSION['username']) && isset($_SESSION['user']) ){
    if($_SESSION['user']=="usermaster"){
	$sel = "SELECT * from `usermaster` where `u_id` = ".$_SESSION['username']."";
	$sel1 = "SELECT * from `usermaster`";
	
	
	$result = mysqli_query($con,$sel);
	$userdata=mysqli_fetch_array($result);
}

else {
	if($_SESSION['user']=="adminmaster"){
        header("Location: admin.php");
    }
    else{
	header("Location: logout.php");
	}
}
}
else {
	header("Location: logout.php");
}
?>

<?php 



	$conn = mysqli_connect("localhost", "root","","eveinfo1");
	
	$db = mysqli_select_db($conn,"image");
	
	if (isset($_GET['id']) && isset($_GET['uid'])) {
	$id = $_GET['id'];
	$u_id = $_GET['uid'];
	$query1 = mysqli_query($conn,"select * from image where id=$id");
	while ($row1 = mysqli_fetch_array($query1)) {

?>

<?php

$eid = $id;
$uid = $u_id;
$number = filter_input(INPUT_POST, 'numberofperson');
$payment = filter_input(INPUT_POST, 'payment');


				$host = "localhost";
				$dbusername="root";
				$dbpassword="";
				$dbname="eveinfo1";
						
				$conn=new mysqli($host,$dbusername,$dbpassword,$dbname);
						
				if(mysqli_connect_error())
				{
					die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
				}
							
				else
				{
					$sql = "INSERT INTO booking (e_id,u_id,number,b_payment) values ('$eid','$uid','$number','$payment')";
					if($conn->query($sql))
					{
						echo  "<script>alter('Booked successfully');</script>";
						header("Location: upcomingdate.php");
					}
					else
					{
						echo "Error: ".$sql."<br>". $conn->error;
					}
					$conn->close();
				}

?>

 <?php 
	}
	}
?>