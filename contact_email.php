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
    <!--	


<?php
          if(isset($_POST['submit_email']) && $_POST['email'])
                {
                
                $email_id= $_POST['email'];
				$name = $_POST['name'];
				$subject = $_POST['subject'];
				$message = $_POST['message'];
                
                    
                    
                       
                      if(1){
                    
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
                    $mail->AddAddress($email_id);
                    $mail->Subject  =  'Reset Password';
                    $mail->IsHTML(true);
                    $mail->Body    = $message;
             
                    }
                    else {
                        header('Location: index.php');
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