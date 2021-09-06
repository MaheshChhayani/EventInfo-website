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


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css"/>
  
  <!-- header-->
 
 
  
  
  <title>EventInfo</title>
  
  <!--<script  type="text/javascript" language="javascript">
 
 $('#add_data').click(function)(){
	 var option = {
		 ajaxPrefix: ''
	 };
	 new Dialogify('addcategory.php', options)
		.title('Add New Category')
		.buttons([
			{
				text:'Cancle',
				click:function(e){
					this.close();
				}
			}
			{
				text:'Insert',
				type:Dialogify.BUTTON_PRIMARY,
				click:function(e)
				{
					var form_data = new FormData();
					form_data.append('name',$('#name').val());
					
					$.ajax({
						method:"POST",
						url:'insertcategory.php',
						data:form_data,
						dataType:'json',
						contentType:false,
						cache:false,
						processData:false,
						success:function(data)
						{
							if(data.error != '')
							{
								$('#form_response').html('<div class="alter alter-danger">' +data.error+'</div>');
							}
							else
							{
								$('#form_response').html('<div class="alter alter-danger">' +data.success+'</div>');
								dataTable.ajax.reload();
							}
						}
					
				}
			}
		
		]).showModal();
 });		
 </script>-->
</head>
<body background="images/abstract-background-blue-311039.jpg">
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

<header id="main-header" class=" py-2 text-white">
	<div class="container">
		<div class="row">
			<div class="col-6-md">
				<h1><i class="fa fa-gear"></i>Dashboard</h1>
			</div>
		</div>
	</div>
</header>
 
 <section id="sections" class="py-4 mb-4 ">
 	<div class="container">
 		<div class="row">
 			<div class="col-md-3">
 				<a href="uploadnow.php" class="btn btn-primary btn-block"><i class="fa fa-plus"></i>Add Post</a>
 			</div>
			
			<div class="col-md-3">
 				<a href="uploadphoto.php" class="btn btn-primary btn-block"><i class="fa fa-plus"></i>Add Photos</a>
 			</div>
			
			<div class="col-md-3">
 				<a href="uploadvideo.php" class="btn btn-primary btn-block"><i class="fa fa-plus"></i>Add Videos</a>
 			</div>
 			
			<div class="col-md-3">
 				<a href="insertcategory.php" class="btn btn-primary btn-block"><i class="fa fa-plus"></i>Add Category</a>
 			</div>
 			<!--<div class="col-md-3">
 				<a href="#" class="btn btn-warning btn-block" data-toggle="modal" data-target="#addUserModel">
 					<i class="fa fa-plus"></i>Add User
 				</a>
 			</div>-->
 		</div>
 	</div>
 </section>
 
 
 
 

 
 
 <!--POSTS-->
 <section id="posts">
 	<div class="container">
 		<div class="row">
 			<div class="col-md-9">
 				<div class="card">
 					<div class="card-title">
 						<h4>Latest Posts</h4>
 					</div>
					<span id="form_response"></span>
 					<table class="table table-striped">
 						<thead class="thead-inverse">
 							<tr>
 								<th>Title</th>
 								<th>category</th>
 								<th>image</th>
 								<th>Body</th>
								<th>Action</th>
								<th>Action 2</th>
 							</tr>
 						</thead>
 						<tbody>
						 <?php
 
								 $conn = mysqli_connect("localhost", "root","","eveinfo1");
								 $result = mysqli_query($conn,"SELECT * from image ORDER BY id DESC");
								 
								 while ($row = mysqli_fetch_assoc($result)):
								 $id = $row['id'];
								 $i=1;
								 

						?>
 							<tr>
							  <td><?php echo $row['title']; ?></td>
							  <td><?php echo $row['category']; ?></td>
							  <td><?php echo $row['image1']; ?></td>
							  <td><?php echo $row['body']; ?></td>
							  <td>
									<a href="index.php?delete=<?php echo $id; ?>" onclick="return confirm('Are you sure?');">Delete</a>
							  </td>
							  <td>
									<a href="update.php?id=<?php echo $id; ?>">Update</a>
							  </td>
								<!--<td><a href="details.html" class="btn btn-secondary"><em class="fa fa-angle-double-right"></em>Details</a></td>-->
 							</tr>
							<?php 
							
							$i++;
							
							if(isset($_GET['delete']))
							{
								$delete_id = $_GET['delete'];
								
								mysqli_query($conn, "DELETE FROM image WHERE id = '$delete_id'");
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
 
 <!--Header Posts-->
 
 
 <!--Modal Category
 
  
  
  <div class="modal fade" id="addCategoryModel">
 	<div class="modal-dialog modal-lg">
 		<div class="modal-content">
		    <form method="POST" action="addcategory.php">
 			<div class="modal-header bg-success text-white">
 				<h5 class="modal-title">Add Category</h5>
				<button class="close" data-dismiss="modal"><span>&times;</span></button>
 			</div>
 			<div class="modal-body">
 				
 					<div class="form-group">
 					<label for="title" class="form-control-label" >Title</label>
 					<input type="title" class="form-control" name="title" required>
 					</div>
 				
 			</div>
 			<div class="modal-footer">
 				<button class="btn btn-secondary" data-dismiss="modal">Close</button>
 				<button class="btn btn-success" type="submit" name="submit1" data-dismiss="modal">Add Category</button>
 			</div>
			</form>
 		</div>
		
 	</div>
 </div>-->

 
 
 <!--Header Users-->
 <div class="modal fade" id="addUserModel">
 	<div class="modal-dialog modal-lg">
 		<div class="modal-content">
 			<div class="modal-header bg-warning text-white">
 				<h5 class="modal-title">Add User</h5>
				<button class="close" data-dismiss="modal"><span>&times;</span></button>
 			</div>
 			<div class="modal-body">
 				<form>
 					<div class="form-group">
 						<label for="name">Name</label>
 						<input type="name" class="form-control">
 					</div>
 					<div class="form-group">
 						<label for="email">Email</label>
 						<input type="email" class="form-control">
 					</div>
 					<div class="form-group">
 						<label for="password">Password</label>
 						<input type="password" class="form-control">
 					</div>
 					<div class="form-group">
 						<label for="psd">Confirm Password</label>
 						<input type="password" class="form-control">
 					</div>
 				</form>
 			</div>
 			<div class="modal-footer">
 				<button class="btn btn-secondary" data-dismiss="modal">Close</button>
 				<button class="btn btn-warning" data-dismiss="modal">Add User</button>
 			</div>
 		</div>
 	</div>
 </div>
 
 
 
  <script src="js/jquery.min.js"></script>
  <script src="js/tether.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="https://cdn.ckeditor.com/4.9.0/standard/ckeditor.js"></script>
  <script>
	CKEDITOR.replace('editor1');
	</script>
	
	<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"></script>
	<script src="js/jquery.dataTables.js"></script>
	<script src="js/dataTables.bootstrap.js"></script>
	<script>
		$(".table").DataTable();
	</script>
</body>
</html>
