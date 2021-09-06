<?php 

session_start();

include('connect-db.php');

    if ( ! empty($_POST['u_email'])){
    $ecode = $_POST['u_email'];
    }
    if ( ! empty($_POST['u_password'])){
    $pass = $_POST['u_password'];
    }

    while(1)
	{

		$sql = "select * from usermaster where u_email='$ecode' and u_password='$pass'";
        $result = $con->query($sql);   
		$row = mysqli_fetch_array($result);
        $count  = mysqli_num_rows($result);
		$id = $sub_row['u_id'];
        if($count == 1)
		{
			$_SESSION['user'] = 'usermaster';
			$_SESSION['username'] = $row['u_id'];
			$_SESSION['u_name'] = $row['u_name'];
						
			break;
				  
		}
		
		break;
				
	}  

	
	if($count == 1)
	{
		header('Location: index1.php?id='.$_SESSION['username']);
	}
	else
		{
			
			 header("Location: login.php");
		}		
?>
