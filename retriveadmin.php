<?php 

session_start();

include('connect-db.php');

    if ( ! empty($_POST['a_email'])){
    $ecode = $_POST['a_email'];
    }
    if ( ! empty($_POST['a_password'])){
    $pass = $_POST['a_password'];
    }

    while(1)
	{

		$sql = "select * from adminmaster where a_email='$ecode' and a_password='$pass'";
        $result = $con->query($sql);   
		$row = mysqli_fetch_array($result);
        $count  = mysqli_num_rows($result);
		$id = $sub_row['a_id'];
        if($count == 1)
		{
			$_SESSION['user'] = 'adminmaster';
			$_SESSION['username'] = $row['a_id'];
			$_SESSION['u_name'] = $row['a_name'];
						
			break;
				  
		}
		
		break;
				
	}  

	
	if($count == 1)
	{
		header('Location: admin/index.php?id='.$_SESSION['username']);
	}
	else
		{
			
			 header("Location: login.php");
		}		
?>
