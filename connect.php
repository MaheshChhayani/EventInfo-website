<?php

$emailid = filter_input(INPUT_POST, 'u_email');
$username = filter_input(INPUT_POST, 'u_name');
$password = filter_input(INPUT_POST, 'u_password');
$locality = filter_input(INPUT_POST, 'u_locality');
$contact = filter_input(INPUT_POST, 'u_contact');

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
					
					/*else if (!empty($emailid))
					{
								  $sql = "  
							INSERT INTO usermaster (u_email)  
							SELECT '".$_POST["u_email"]."' FROM usermaster  
							WHERE NOT EXIST(  
							 SELECT u_email FROM usermaster WHERE u_email = '".$_POST["u_email"]."'  
							) LIMIT 1  
					   ";  
						
						 if(mysqli_query($conn, $sql))  
						{  
								$insert_id = mysqli_insert_id($connect);  
								if($insert_id != '')  
								{  
									header("location:register.php?inserted=1");  
								}  
								else  
								{  
									header("location:register.php?already=1");  
								}  
						}  
					
					
					
					}*/
					
					
					
					
					
					
					
					else
					{
						$sql = "INSERT INTO usermaster(u_name,u_email,u_password,u_locality,u_contact) values ('$username','$emailid','$password','$locality','$contact')";
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