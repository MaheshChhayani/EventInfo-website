<?php

include('connect-db.php');
 session_start();
$q='';

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
<title>Upcoming Events</title>
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
    <div class="container"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a> <a class="brand" href="index.html"><img src="img/Logo1.png" hight=80px width=80px><span class="color-highlight" align="bottom"><small>Event Info</span> </a>
      <div align="right"><h2><?php echo $_SESSION['u_name'] ?> <img src="images/pe.jpg" hight=20px width=20px></h2></div>
	  <div class="nav-collapse">
         <ul class="nav pull-left">
          <li><a href="index1.php"><b><h2>Home</h2></b></a></li>
                 
          <li><a href="gallery.php"><b><h2>Gallery</h2></b></a></li>
          <li ><a href="upcomingevents.php"><b><h2>Upcoming Events</h2></b></a></li>
          <li><a href="pastevents1.php"><b><h2>Past Events</h2></b></a></li>
          
          <li><a href="contact.php"><b><h2>Contact us</h2></b></a></li>
		   <li ><a href="aboutus1.php"><b><h2>About Us</h2></b></a></li>
		    <li><a href="logout.php"><b><h2>Logout</h2></b></a></li>
        </ul>
      </div>

    </div>
  </div>
</div>

<div  class="container" >
    <table class="label" width="100%">
     <tr height="26px" align="center">
     	<td> Upcoming Events</td>
     </tr>
     </table>
	 <br>


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

 
 
 
 
 
 
 
 $product_query = "SELECT * FROM image WHERE category = '".$row["category_name"]."' ORDER BY id DESC";
 $product_result = mysqli_query($connect, $product_query);
 while($sub_row = mysqli_fetch_array($product_result))
 {
  $tab_content .= '
  <div class="col-md-3 events" style="margin-bottom:36px;">
   <img src="admin/image/'.$sub_row["image1"].'" class="img-responsive img-thumbnail"   height="191" width="369" />
   
   <p style="margin-top:5px;"><b><h3><a href="upcomingdate.php?id='.$sub_row["id"].'">'.$sub_row["title"].'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$sub_row["date"].'</a></h3></b></p>
   
   
  </div>
  ';
 }
 $tab_content .= '<div style="clear:both"></div></div>';
 $i++;
}

?>
<table class="table">
<div class="container">
  
   <br />
   <ul class="nav nav-tabs">
   <?php
   echo $tab_menu;
   ?>
   </ul>
   
   <div class="tab-content">
	
	<?php echo $tab_content;?>
	</div>
	
		   
</div>



<!--<div class="container">
  <hr>
  <div class="row">
    <div class="span4">
     <a rel="lightbox" href="img/upe/1.jpg"><img src="img/upe/1.jpg" alt=""></a>
    <a href="upcomingdate.php"><h3>Deep</a><small>By <a href="">popat73</a></small></h3></div>
    <div class="span4">
      <a rel="lightbox" href="img/upe/2.jpg"><img src="img/upe/2.jpg" alt=""></a>
      <a href="upcomingdate.php"><h3> Deep</a><small> By <a href="">popat73</a></small> </h3></div>
    <div class="span4">
      <a rel="lightbox" href="img/upe/3.jpg"><img src="img/upe/3.jpg" alt=""></a>
      <a href="upcomingdate.php"><h3>Deep</a><small> By <a href="">popat73</a></small></h3></div>
  </div>
  <div class="row">
    <div class="span4">
      
      <a rel="lightbox" href="img/upe/4.jpg"><img src="img/upe/4.jpg" alt=""></a>
      <a href="upcomingdate.php"><h3>Deep</a><small> By <a href="#">popat73</a></small></h3> </div>
    <div class="span4">
      
      <a rel="lightbox" href="img/upe/5.jpg"><img src="img/upe/5.jpg" alt=""></a>
      <a href="upcomingdate.php"><h3>Deep</a><small> By <a href="#">popat73</a></small> </h3></div>
    <div class="span4">
      
      <a rel="lightbox" href="img/upe/6.jpg"><img src="img/upe/6.jpg" alt=""></a>
      <a href="upcomingdate.php"><h3>Deep</a><small> By <a href="#">popat73</a></small></h3> </div>
  </div>
  <div class="row">
    <div class="span4">
      
      <a rel="lightbox" href="img/upe/7.jpg"><img src="img/upe/7.jpg" alt=""></a>
      <a href="upcomingdate.php"><h3>Deep</a><small> By <a href="#">popat73</a></small></h3> </div>
    <div class="span4">
       </h3>
      <a rel="lightbox" href="img/upe/8.jpg"><img src="img/upe/8.jpg" alt=""></a>
      <a href="upcomingdate.php"><h3>Deep</a><small> By <a href="#">popat73</a></small></div>
    <div class="span4">
      
      <a rel="lightbox" href="img/upe/9.jpg"><img src="img/upe/9.jpg" alt=""></a>
      <a href="upcomingdate.php"><h3>Deep</a><small> By <a href="#">popat73</a></small></h3> </div>
  </div>-->

  <footer class="container">
   <div> </div>
    
  </footer>

  <script src="js/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"></script>
	<script src="js/jquery.dataTables.js"></script>
	<script src="js/dataTables.bootstrap.js"></script>
	<script>
		$(".table").DataTable();
	</script>

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
