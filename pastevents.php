<!DOCTYPE html>
<html lang="en">
<head>
<title>Past Events</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/bootstrap-responsive.css" rel="stylesheet">
<style>
	.events {
		float: left;
		margin-left: 15px;
		
	}
</style>

<link href='http://fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a> <a class="brand" href="index.html"><img src="img/Logo1.png" hight=80px width=80px><span class="color-highlight" align="bottom"><small>Event Info</span> </a></div>
	
      <div class="nav-collapse navbar navbar-fixed-top navbar-inner container">
         <ul class="nav pull-left">
          <li><a href="index.php"><b><h2>Home</h2></b></a></li>
          <li class="active"><a href="pastevents.php"><b><h2>Past Events</h2></b></a></li>
          
		  <li><a href="login.php"><b><h2>Login</h2></b></a></li>
          <li><a href="register.php"><b><h2>Sign Up</h2></b></a></li>
		   <li><a href="aboutus.php"><b><h2>About Us</h2></b></a></li>
          
        </ul>
      </div>
      
    </div>
  </div>
</div>

<div class="container"  >
    <table class="label" width="100%">
     <tr height="26px" align="center">
     	<td>Past Events</td>
     </tr>
     </table>
    </div>

<?php
$connect = mysqli_connect("localhost", "root", "", "eveinfo1");
$tab_query = "SELECT * FROM category ORDER BY category_id ASC";
$tab_result = mysqli_query($connect, $tab_query);
$tab_menu = '';
$tab_content = '';
$i = 0;
while($row = mysqli_fetch_array($tab_result))
{
 if($i == 0)
 {
  $tab_menu .= '
   <li class="active"><a href="#'.$row["category_id"].'" data-toggle="tab"><h4>'.$row["category_name"].'</h4></a></li>
  ';
  $tab_content .= '
   <div id="'.$row["category_id"].'" class="tab-pane fade in active">
  ';
 }
 else
 {
  $tab_menu .= '
   <li><a href="#'.$row["category_id"].'" data-toggle="tab"><h4>'.$row["category_name"].'</h4></a></li>
  ';
  $tab_content .= '
   <div id="'.$row["category_id"].'" class="tab-pane fade">
  ';
 }
 
 $product_query = "SELECT * FROM pastevent WHERE p_category = '".$row["category_name"]."'";
 $product_result = mysqli_query($connect, $product_query);
 while($sub_row = mysqli_fetch_array($product_result))
 {
  $tab_content .= '
  <div class="col-md-3 events" style="margin-bottom:36px;">
   <img src="admin/img/'.$sub_row["p_image1"].'" class="img-responsive img-thumbnail"   height="191" width="369" />
   
  <p style="margin-top:5px;"><b><h3><a href="pasteventdetail.php?id='.$sub_row["p_id"].'">'.$sub_row["p_title"].'</a></h3></b></p>
   
   
  </div>
  ';
 }
 $tab_content .= '<div style="clear:both"></div></div>';
 $i++;
}
?>

<div class="container">
  
   <br />
   <ul class="nav nav-tabs">
   <?php
   echo $tab_menu;
   ?>
   </ul>
   <div class="tab-content">
  
   <?php
   echo $tab_content;
   ?>
   </div>
  </div>



<!--<div class="container">
  <hr>
  <div class="row">
    <div class="span4">
     <a rel="lightbox" href="img/contact/c1.jpg"><img src="img/contact/c1.jpg" alt=""></a>
		<a href="pasteventdetail.php"><h3>Deep </a><small>By <a href="img/contact/c1.jpg">harry56</a></small></h3></div>
    <div class="span4">
      <a rel="lightbox" href="img/hof/h12.jpg"><img src="img/hof/h112.jpg" alt=""></a>
		<a href="pasteventdetail.php"><h3> Athlate</a><small> By <a href="img/hof/h112.jpg">mahesh21</a></small> </h3></div>
    <div class="span4">
      <a rel="lightbox" href="img/hp/hp4.jpg"><img src="img/hp/hp14.jpg" alt=""></a>
		<a href="pasteventdetail.php"><h3>College</a><small> By <a href="img/hp/hp14.jpg">harry56</a></small></h3></div>
  </div>
  <div class="row">
    <div class="span4">
      
      <a rel="lightbox" href="img/hof/h3.jpg"><img src="img/hof/h33.jpg" alt=""></a>
		<a href="pasteventdetail.php"><h3>Wallyball</a><small> By <a href="img/hof/h33.jpg">harry561</a></small></h3> </div>
    <div class="span4">
      
      <a rel="lightbox" href="img/hof/h10.jpg"><img src="img/hof/h100.jpg" alt=""></a>
		<a href="pasteventdetail.php"><h3>College</a><small> By <a href="img/hof/h100.jpg">mahesh21</a></small> </h3></div>
    <div class="span4">
      
      <a rel="lightbox" href="img/hof/h11.jpg"><img src="img/hof/h111.jpg" alt=""></a>
		<a href="pasteventdetail.php"><h3>Write Weapon</a><small> By <a href="img/hof/h111.jpg">harry56</a></small></h3> </div>
  </div>
  <div class="row">
    <div class="span4">
      
      <a rel="lightbox" href="img/hof/h8.jpg"><img src="img/hof/h88.jpg" alt=""></a>
		<a href="pasteventdetail.php"><h3>Institute</a><small> By <a href="img/hof/h88.jpg">harry56</a></small></h3> </div>
    <div class="span4">
       </h3>
      <a rel="lightbox" href="img/contact/c2.jpg"><img src="img/contact/c2.jpg" alt=""></a>
	  <a href="pasteventdetail.php"><h3> Bholenath</a><small> By <a href="img/contact/c2.jpg">mahesh21</a></small></div>
    <div class="span4">
      
      <a rel="lightbox" href="img/hof/h1.jpg"><img src="img/hof/h1.jpg" alt=""></a>
		<a href="pasteventdetail.php"><h3>Christain</a><small> By <a href="img/hof/h1.jpg">harry56</a></small></h3> </div>
  </div>
  -->
  <!--<hr>
  <footer class=" container row">
    <div> </div>
    <p> &copy;2018 Mahesh Patel Company.<br>
      Design by <a href="">eventinfo.com</a> </p>
  </footer>-->
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
