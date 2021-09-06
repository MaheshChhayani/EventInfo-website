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
<title>gallery</title>
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
      <div align="right"><h2><?php echo $_SESSION['u_name'] ?> <img src="images/pe.jpg" hight=20px width=20px></h2></div>
	  <div class="nav-collapse">
         <ul class="nav pull-left">
          <li><a href="index1.php"><b><h2>Home</h2></b></a></li>

          <li class="active"><a href="gallery.php"><b><h2>Gallery</h2></b></a></li>
          <li><a href="upcomingevents.php"><b><h2>Upcoming Events</h2></b></a></li>
          <li><a href="pastevents1.php"><b><h2>Past Events</h2></b></a></li>
       
          <li><a href="contact.php"><b><h2>Contact us</h2></b></a></li>
		   <li ><a href="aboutus1.php"><b><h2>About Us</h2></b></a></li>
		    <li><a href="logout.php"><b><h2>Logout</h2></b></a></li>
        </ul>
      </div>
 
    </div>
  </div>
</div>

<div class="container"  >
    <table class="label" width="100%">
     <tr height="26px" align="center">
     	<td>Gallery</td>
     </tr>
     </table>
    </div>


<div class="container">
  <hr>
  <div class="row">
    <div class="span4">
     <a rel="lightbox" href="photos.html"><img src="img/photos/s/11.jpg" alt=""></a>
    <a href="photos.php"><h3>Photos </a><small>By <a href="#">mahesh21</a></small></h3></div>
    <div class="span4">
      <a rel="lightbox" href="videos.html"><img src="img/photos/s/22.jpg" alt=""></a>
      <a href="videos.php"><h3>Videos</a><small> By <a href="#">popat73</a></small> </h3></div>
    
  </div>
 
  
  <hr>
  <footer class="row">
    <div>
      <div class="span4">
        <div class="is-padded">
          <nav>
            <h2>Follow Us</h2>
            <hr>
            <ul>
              <li><a href="#">Facebook</a></li>
              <li><a href="#">Instagram</a></li>
              <li><a href="#">Google+</a></li>
              <li><a href="#">Twitter</a></li>
             
            </ul>
          </nav>
        </div>
      </div>
   <div class="span4">
        <div class="is-padded">
          <h2>Twitter</h2>
          <hr>
          <a href="#">@maheshchhayani</a>
          <p>Trust in the LORD with all your heart and lean not on your own understanding. </p>
          <em>2 days ago</em><br>
          <br>
          <a href="#">@harrymakadia</a>
          <p>Teamwork makes the dream work!</p>
          <em>3 days ago</em> </div>
      </div>
      <div class="span4">
        <div class="is-padded">
          <h2>Religion</h2>
          <blockquote>Religion promotes the major social virtues like truth, honesty, non-violence, service, love, discipline etc. A follower of the religions internalizes these virtues and becomes disciplined citizen of the society. <br>
            <br><b>"Just as a candle cannot burn without fire, men cannot live without a spiritual life"</b><br>
            <br>
            
            <em>- eventinfo.com</em> </blockquote>
        </div>
      </div>
    </div>
    
  </footer>
</div>

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
