<?php
include('connect-db.php');	
?>
<!DOCTYPE html>
<html lang="en">

<head>
       <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Au Register Forms by Colorlib</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
        <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
  
                        <?php
                    if(isset($_POST['submit_email']) && $_POST['email'])
                {
                
                $email_id= $_POST['email'];
                
                    while(1){
                        /*$sql = "SELECT * FROM adminmaster WHERE a_email = '$email_id'";
                      $result = $con->query($sql);
                      $count = mysqli_num_rows($result);  
                      if($count==1){
                        $not_found=1;
                        while($data=mysqli_fetch_array($result))
                        {
                           $receiptant = $data['a_email'];
                          $email=$data['a_email'];
                          $pass=$data['a_password'];
						  $aid=$data['a_id'];
                        }
                        break;
                      }*/
                     
                        $sql = "SELECT * FROM usermaster WHERE u_email = '$email_id'";
                        $result = $con->query($sql);
                        $count = mysqli_num_rows($result);  
                        if($count==1){
                            $not_found=1;
                            while($data=mysqli_fetch_array($result))
                            {
                                $receiptant = $data['u_email'];
                                $email=$data['u_email'];
                                $pass=$data['u_password'];
								$uid=$data['u_id'];
                            }
                         break;
                        }
                            
                        
                    
                        break; 
                      }
                      if($not_found == 1){
                    //	$link="<a href='localhost/eve1/reset_pass.php?key=".$email."&reset=".$pass."'>Click To Reset password</a>";
					
                    require_once('phpmail/class.phpmailer.php');
                    $mail = new PHPMailer();
                    $mail->CharSet =  "utf-8";
                    $mail->IsSMTP();
                    // enable SMTP authentication
                    $mail->SMTPAuth = true;                  
                    // GMAIL username
					
                    $mail->Username = "ivplanner9@gmail.com";
                    // GMAIL password
                    $mail->Password = "@dm!np@55";
                    $mail->SMTPSecure = "ssl";  
                    // sets GMAIL as the SMTP server
                    $mail->Host = "smtp.gmail.com";
                    // set the SMTP port for the GMAIL server
                    $mail->Port = "465";
                    $mail->From='ivplanner9@gmail.com';
                    $mail->FromName='IV Admin';
                    $mail->AddAddress($receiptant);
                    $mail->Subject  =  'Your User ID ';
                    $mail->IsHTML(true);
                    $mail->Body    = 'User ID of this register email id is '.$uid.'';
                    if($mail->Send())
                    {
                    ?>
                    <h3 class="box-title m-b-20"><?php  echo 'User ID sent successfully <html><body><a href="booking.php"><h3>Click here</h3></a><body></html>' ?></h3>
                    <?php
                    }
                    else
                    {
                    ?>
                    <h3 class="box-title m-b-20"><?php  echo "Mail Error - >".$mail->ErrorInfo;?></h3>
                    <?php
                        }
                    }
                    else {
                        header('Location: getuserid.php');
                    }
                }	
                ?>
    
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>
</body>

</html>