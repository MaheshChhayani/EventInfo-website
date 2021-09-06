<?php

include('connect-db.php');

session_start();

 
if(isset($_SESSION['username']) && isset($_SESSION['user']) && isset($_SESSION['u_name']) ){
    if($_SESSION['user']=="adminmaster"){
	$sel = "SELECT * from `adminmaster` where `a_id` = ".$_SESSION['username']."";
	$result = mysqli_query($con,$sel);
	$userdata=mysqli_fetch_array($result);
}

else {
	if($_SESSION['user']=="usermaster"){
        header("Location: index.php");
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

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="BR-Logo.svg.png">
    <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">

    <title>Add Category</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
  </head>

  <body class="">
   
     <nav class="navbar navbar-toggleable-sm navbar-inverse bg-inverse p-0">
  	<div class="container">
  		<button class="navbar-toggler navbar-toggler-right" data-target="#mynavbar" data-toggle="collapse">
  			<span class="navbar-toggler-icon"></span>
  		</button>
  		<a href="index.php" class="navbar-brand mr-3">EventInfo</a>
  		<div class="collapse navbar-collapse" id="mynavbar">
  			<ul class="navbar-nav">
  				<!--<li class="nav-item px-2">
  					<a href="index.html" class="nav-link active">Dashboard</a>
  				</li>
  				<li class="nav-item px-2">
  					<a href="posts.html" class="nav-link">Posts</a>
  				</li> -->
  					
  			</ul>
  			<ul class="navbar-nav ml-auto"> 
  				<li class="nav-item dropdown mr-3">
  					
  					<div class="dropdown-menu">
						<a href="profile.html" class="dropdown-item"><i class="fa fa-user-circle"></i>Profile</a>
						<a href="settings.html" class="dropdown-item"><i class="fa fa-gear"></i>Settings</a>
  					</div>
  				</li>
  				<li class="nav-item">
  					<a href="logout.php" class="nav-link"><i class="fa fa-user-times"></i>Logout</a>
  				</li>
  			</ul>
  		</div>
  	</div>
  	
  </nav>
  
	  <div class="mb-6 mt-auto">
	  <br/>
	  <br/>
    <form method="post" action="" enctype="multipart/form-data">
     
      <div class="modal-dialog modal-lg mt-5">
 	<div class="modal-content">
 		<div class="modal-header bg-primary text-white">
 			<h5 class="modal-title">Add Category </h5>
 			
 		</div>
 		<div class="modal-body">
 			<form>
 			<div class="form-group">
 				<label for="title" class="form-control-label p-0">Add New Category</label>
 				<input type="text" class="form-control" name="title" required>
 			</div>
 			
 			</form>
 		</div>
 		<div class="modal-footer">
 			<!--<button class="btn btn-secondary" data-dismiss="modal" href="index.php">Close</button>-->
			<div class="btn btn-secondary"><a href="index.php">Home </a></div>
 			<button class="btn btn-primary" data-dismiss="modal" name="add">Add</button> 
 			
 		</div>
 	</div>
 	 
 </div>
    
      
    </form>
    
    </div>
	
	<!--POSTS-->
 <section id="posts">
 	<div class="modal-dialog modal-lg mt-5">
 		<div class="row">
 			<div class="col-md-12">
 				<div class="card">
 					<div class="card-title">
 						<h4>Latest Posts</h4>
 					</div>
					<span id="form_response"></span>
 					<table class="table table-striped">
 						<thead class="thead-inverse">
 							<tr>
 								
 								<th>category</th>
 								
								<th>Action</th>
								
 							</tr>
 						</thead>
 						<tbody>
						 <?php
 
								 $conn = mysqli_connect("localhost", "root","","eveinfo1");
								 $result = mysqli_query($conn,"SELECT * from category ORDER BY category_id DESC");
								 
								 while ($row = mysqli_fetch_assoc($result)):
								 $id = $row['category_id'];
								 $i=1;
								 

						?>
 							<tr>
							  
							  <td><?php echo $row['category_name']; ?></td>
							  
							  <td>
									<a href="insertcategory.php?delete=<?php echo $id; ?>" onclick="return confirm('Are you sure?');">Delete</a>
							  </td>
							  
								<!--<td><a href="details.html" class="btn btn-secondary"><em class="fa fa-angle-double-right"></em>Details</a></td>-->
 							</tr>
							<?php 
							
							$i++;
							
							if(isset($_GET['delete']))
							{
								$delete_id = $_GET['delete'];
								
								mysqli_query($conn, "DELETE FROM category WHERE category_id = '$delete_id'");
							}
							
							?>
							<?php endwhile; ?>
 						</tbody>
 					</table> 
 				</div>
 			</div>
 			
 		</div>
 	</div>
 </section>
      
      <script src="js/jquery.min.js"></script>
  <script src="js/tether.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  </body>
</html>
<?php

$conn = mysqli_connect("localhost", "root", "", "eveinfo1");


if(isset($_POST['add'])) {
	
	$book_name = mysqli_real_escape_string($conn,$_POST['title']);
	
	
		
		if($book_name ==null )
		{
			
			echo "<script>alert('plese check all fields.'); </script>";
			
		}
		else
		{
			$sql = "INSERT INTO `category`(`category_name`)VALUES('$book_name')";
			$qry = mysqli_query($conn, $sql);
			echo "<script>alert('Data inserted successfully');</script>";
		}


}
?>
