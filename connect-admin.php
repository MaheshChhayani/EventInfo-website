<?php

$emailid = filter_input(INPUT_POST, 'a_email');
$username = filter_input(INPUT_POST, 'a_name');
$password = filter_input(INPUT_POST, 'a_password');
$locality = filter_input(INPUT_POST, 'a_locality');
$contact = filter_input(INPUT_POST, 'a_contact');

if(!empty($username))
{
	if(!empty($emailid))
	{
		if(!empty($password))
		{
			if(!empty($locality))
			{
				if(!empty($contact))
				{
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
						$sql = "INSERT INTO adminmaster(a_name,a_email,a_password,a_locality,a_contact) values ('$username','$emailid','$password','$locality','$contact')";
						if($conn->query($sql))
						{
							echo  "record is inserted successfully";
							header("Location: login.php");
						}
						else
						{
							echo "Error: ".$sql."<br>". $conn->error;
						}
						$conn->close();
					}
				}
			}
			else
			{
				echo "Password should not be empty";
				die();
			}
		}	
		else
		{
			echo "Username should not be empty";
			die();
		}
	}
	else
	{
		echo "email should not be empty";
		die();
	}
}
else
{
	echo"first name should not be empty";
	die();
}
?>