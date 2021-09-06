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
<title>Upcoming Events</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/bootstrap-responsive.css" rel="stylesheet">
<link href="css/booking.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>

<style>
.example2 {
 height: 250px;	
 overflow: hidden;
 position: relative;
}
.example2 h3 {
 position: absolute;
 width: 100%;
 height: 100%;
 margin: 0;
 line-height: 50px;
 text-align: left;

 /* Apply animation to this element */	
 animation: example2 10s ease-out;
}
/* Move it (define the animation) */
@keyframes example2 {
 0%   { 
 transform: translateY(200%); 		
 }
 100% { 
 transform: translateY(0%); 
 }
}
</style>
</head>
<body>
<div class="navbar navbar-fixed-top">
  <div class="container"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a> <a class="brand" href="index.html"><img src="img/Logo1.png" hight=80px width=80px><span class="color-highlight" align="bottom"><small>&nbsp; Event Info</span> </a>
      <div align="right"><h2><?php echo $_SESSION['u_name'] ?> <img src="images/pe.jpg" hight=20px width=20px></h2></div>
	  <div class="nav-collapse">
         <ul class="nav pull-left">
          <li><a href="index1.php"><b><h2>Home</h2></b></a></li>
   
      
          <li><a href="gallery.php"><b><h2>Gallery</h2></b></a></li>
          <li class="active"><a href="upcomingevents.php"><b><h2>Upcoming Events</h2></b></a></li>
          <li><a href="pastevents1.php"><b><h2>Past Events</h2></b></a></li>
          
          <li><a href="contact.php"><b><h2>Contact us</h2></b></a></li>
		   <li ><a href="aboutus1.php"><b><h2>About Us</h2></b></a></li>
		    <li><a href="logout.php"><b><h2>Logout</h2></b></a></li>
        </ul>
      </div>
      
    </div>
</div>

<?php 



	$conn = mysqli_connect("localhost", "root","","eveinfo1");
	
	$db = mysqli_select_db($conn,"image");
	
	if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$query1 = mysqli_query($conn,"select * from image where id=$id");
	while ($row1 = mysqli_fetch_array($query1)) {

?>

<div class="container" align="left">
  <hr size="0">
  <div class="row">
    <form class="form-signin" method="post" action="connectbooking.php?id=<?php echo $id; ?>,uid=<?php echo $_SESSION['username'] ?> ">
		<h1 class="form-signin-heading"><b>ADVANCE BOOKING</b></h1>
		<h3><i>Charges for this event is 1000/-</i></h3><br/>
		 <div>
		 <p><b><h4>Event ID</h4></b></p><input type="number" name="e_id" id="inputamount" class="form-control" placeholder="Event ID"  value="<?php echo $row1['id']; ?>" disabled="disabled"></br>
		 <p><h4>User ID</h4></p><input type="number" name="u_id" id="inputamount" class="form-control" value="<?php echo $_SESSION['username']; ?>" placeholder="User ID"  disabled="disabled"></br>
		 <p><h4>Fee</h4></p><input type="number" name="amount" id="inputamount" class="form-control" value="1000" disabled="disabled"></br>
		 <p><h4>Number of People</h4></p><input type="number" name="numberofperson" id="inputamount" class="form-control" placeholder="Number of People" required autofocus></br>
		   
		    <p><h4>Payment Method</h4></p><div class="search_categories">
				<div class="select">
					<select name="payment" id="search_categories">
						<option value="By cash" selected="selected">By Cash</option>
						<option value="Paytm">Paytm</option>
						<option value="PhonePe">PhonePe</option>
						<option value="Freecharge">Freecharge</option>
					</select>
				</div>
			</div>
		</div>
		<!--<div>
			<br><b>If you do not know your user id then<a href="getuserid.php">Click here</a><b/>
		</div>-->
			</br>
			<button class="button" style="vertical-align:middle" type="submit"><span>SUBMIT </span></button>
      </form>
    </div>	
</div>

 <?php 
	}
	}
?>

<!--<div class="example2 container" align="left">
<h2>Event ID</h2><br>
<h3>1 - Diwali</h3><br>
<h3>2 - Marathon</h3><br>
<h3>3 - Youthfest </h3><br>
<h3>4 - Mufest</h3><br>
<h3>5 - Sports</h3><br>
<h3>6 - Vvp enigma</h3><br>
</div>-->
<?php
	
/*include('connect-db.php');	

					$sql = "SELECT e_id, e_name FROM eventmaster";
                      $result = $con->query($sql);
                      $count = mysqli_num_rows($result); 
						
						if ($con->connect_error) {
						die("Connection failed: " . $con->connect_error);
						} 
						
						if ($result->num_rows > 0) {
						// output data of each row
						while($row = $result->fetch_assoc()) {
							
							echo "<br> id- ". $row["e_id"]. " - ". $row["e_name"]."<br>";
						}
					} else {
						echo "0 results";
					}
*/
?>





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
