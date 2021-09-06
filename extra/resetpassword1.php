


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
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
</head>

<body>


    <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
	
        <div class="wrapper wrapper--w780">
            <div class="card card-3">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">reset password Info</h2>
                    <form method="post" action="resetvalue.php">
                                                

						 <div class="input-group">
							  <label class="input--style-3" >Email</label>
                            <input class="input--style-3" type="email" name="u_email" required>
                        </div>
						
						<div class="input-group">
						<label class="input--style-3">New Password</label>
						<input id="password" class="input--style-3" type="password" name="u_password"  required>
						
						</div>
														
						
                       
                        <div class="p-t-10">
                            <button class="btn btn--pill btn--green" id="submit_email" name="submit_email" type="submit" value="submit">Login</button>
                        </div>
												
						<span id="message" style="color:red;">   </span><br></br>
						<div><a href="Login-admin.php"><h4>Login for Admin</h4></a></div>
						<div><a href="sendlink.php"><h4>send link</h4></a></div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>
	
	

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>