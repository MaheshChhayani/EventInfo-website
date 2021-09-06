<?php

include('connect-db.php');
 session_start();

if(isset($_SESSION['username']) && isset($_SESSION['user']) ){
    if($_SESSION['user']=="usermaster"){
	$sel = "SELECT * from `usermaster` where `u_id` = ".$_SESSION['username']."";
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


<!DOCTYPE html>
<html lang="en">
<head>
<title>History</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/bootstrap-responsive.css" rel="stylesheet">

<link href='http://fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a> <a class="brand" href="index.html"><img src="img/Logo1.png" hight=80px width=80px><span class="color-highlight" align="bottom"><small>Event Info</span> </a>
      <div class="nav-collapse">
         <ul class="nav pull-left">
          <li><a href="index1.php"><b><h2>Home</h2></b></a></li>
         
        <li><a href="gallery.php"><b><h2>Gallery</h2></b></a></li>
          <li><a href="upcomingevents.php"><b><h2>Upcoming Events</h2></b></a></li>
          <li><a href="pastevents1.php"><b><h2>Past Events</h2></b></a></li>
        
          <li><a href="contact.php"><b><h2>Contact us</h2></b></a></li>
		   <li><a href="logout.php"><b><h2>Logout</h2></b></a></li>
        </ul>
      </div>
      
    </div>
  </div>
</div>

<div class="container"  >
    <table class="label" width="100%">
     <tr height="26px" align="center">
     	<td> History Of Festivals</td>
     </tr>
     </table>
    </div>


<div class="container">
  <hr>
  <div class="row">
    <div class="span4">
     <a rel="lightbox" href="img/hof/h1.jpg"><img src="img/hof/h1.jpg" alt=""></a>
    <a href="history page1.php"><h3>Deep </a><small>By <a href="history page.php">mahesh21</a></small></h3></div>
    <div class="span4">
      <a rel="lightbox" href="img/hof/h2.jpg"><img src="img/hof/h2.jpg" alt=""></a>
      <a href="history page1.php"><h3> Deep</a><small> By <a href="history page.php">malay01</a></small> </h3></div>
    <div class="span4">
      <a rel="lightbox" href="img/hof/h3.jpg"><img src="img/hof/h3.jpg" alt=""></a>
      <a href="history page1.php"><h3>Deep </a><small> By <a href="history page.php">mahesh21</a></small></h3></div>
  </div>
  <div class="row">
    <div class="span4">
      
      <a rel="lightbox" href="img/hof/h4.jpg"><img src="img/hof/h4.jpg" alt=""></a>
      <a href="history page1.php"><h3>Mhs</a><small> By <a href="history page.php">mahesh21</a></small></h3> </div>
    <div class="span4">
      
      <a rel="lightbox" href="img/hof/h5.jpg"><img src="img/hof/h5.jpg" alt=""></a>
      <a href="history page1.php"><h3> Holi</a><small> By <a href="history page.php">malay01</a></small> </h3></div>
    <div class="span4">
      
      <a rel="lightbox" href="img/hof/h6.jpg"><img src="img/hof/h6.jpg" alt=""></a>
      <a href="history page1.php"><h3>Deep</a><small> By <a href="history page.php">mahesh21</a></small></h3> </div>
  </div>
  <div class="row">
    <div class="span4">
      
      <a rel="lightbox" href="img/hof/h7.jpg"><img src="img/hof/h7.jpg" alt=""></a>
      <a href="history page1.php"><h3>Deep</a><small> By <a href="history page.php">mahesh21</a></small></h3> </div>
    <div class="span4">
       </h3>
      <a rel="lightbox" href="img/hof/h8.jpg"><img src="img/hof/h8.jpg" alt=""></a>
      <a href="history page1.php"><h3> Deep</a><small> By <a href="history page.php">malay01</a></small></div>
    <div class="span4">
      
      <a rel="lightbox" href="img/hof/h9.jpg"><img src="img/hof/h9.jpg" alt=""></a>
      <a href="history page1.php"><h3>Deep</a><small> By <a href="history page.php">mahesh21</a></small></h3> </div>
  </div>
  <hr>
  <footer class="row">
    <div> </div>
    <p> &copy;2018 Mahesh Patel Company.<br>
      Design by <a href="">religiousevent.com</a> </p>
  </footer>
</div>
<!-- /container -->
<script src="js/jquery-1.7.1.min.js"></script>
<script src="js/bootstrap-transition.js"></script>
<script src="js/bootstrap-carousel.js"></script>
<script src="js/bootstrap-alert.js"></script>
<script src="js/bootstrap-modal.js"></script>
<script src="js/bootstrap-dropdown.js"></script>
<script src="js/bootstrap-scrollspy.js"></script>
<script src="js/bootstrap-tab.js"></script>
<script src="js/bootstrap-tooltip.js"></script>
<script src="js/bootstrap-popover.js"></script>
<script src="js/bootstrap-button.js"></script>
<script src="js/bootstrap-collapse.js"></script>
<script src="js/bootstrap-typeahead.js"></script>
<script src="js/jquery-ui-1.8.18.custom.min.js"></script>
<script src="js/jquery.smooth-scroll.min.js"></script>
<script src="js/lightbox.js"></script>
</body>
</html>
