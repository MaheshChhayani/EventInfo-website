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

<body  class="bgcolor">

    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
        <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <?php
    
    if($_GET['key'] && $_GET['reset'])
    {
    $email=$_GET['key'];
    $pass=$_GET['reset'];
      while(1){
        
        $sql = "SELECT * FROM usermaster WHERE md5(u_email) = '$email' and md5(u_password) = '$pass'";
        $result = $con->query($sql);
        $count = mysqli_num_rows($result);  
        if($count==1){
        ?>
    <section id="wrapper">
        <div class="login-register" style="background-image:url(assets/images/background/login-register.jpg);">        
            <div class="login-box card">
            <div class="card-body">
                <form class="form-horizontal form-material"  action="submit_new.php" method="post">
                    <h3 class="box-title m-b-20">Enter New Password</h3>
                    <div class="form-group ">
                      <div class="col-xs-12">
                        <input type="hidden" name="user" value="admin">
                        <input type="hidden" name="email" value="<?php echo $email;?>">
                        <input class="form-control"  placeholder="Password" type="password" name="password">
                      </div>
                    </div>
                    <div class="form-group text-center m-t-20">
                      <div class="col-xs-12">
                        <input type="submit" id="submit_password" class="btn1 btn-info btn-lg btn-block text-uppercase waves-light"  name="submit_password" value="Reset">
                      </div>
                    </div>
                  </form>
            </div>
          </div>
        </div>
    </section>
    <?php
        break;
    }

    $sql = "SELECT * FROM adminmaster WHERE md5(a_email) = '$email' and md5(a_password) = '$pass'";
    $result = $con->query($sql);
    $count = mysqli_num_rows($result);  
    if($count==1){
        ?>
        <section id="wrapper">
            <div class="login-register" style="background-image:url(assets/images/background/login-register.jpg);">        
                <div class="login-box card">
                <div class="card-body">
                    <form class="form-horizontal form-material"  action="submit_new.php" method="post">
                        <h3 class="box-title m-b-20">Enter New Password</h3>
                        <div class="form-group ">
                          <div class="col-xs-12">
                            <input type="hidden" name="user" value="userd">
                            <input type="hidden" name="email" value="<?php echo $email;?>">
                            
                        <input class="form-control" placeholder="Password" type="password" name="password">
                          </div>
                        </div>
                        <div class="form-group text-center m-t-20">
                          <div class="col-xs-12">
                            <input type="submit" id="submit_password" class="btn btn-info btn-lg btn-block text-uppercase waves-light resetcolor"  name="submit_password" value="Reset">
                          </div>
                        </div>
                      </form>
             
        
      <?php
break; 
}
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