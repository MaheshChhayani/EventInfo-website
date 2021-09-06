<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
  <title>EventInfo</title>
</head>
<body>
  <nav class="navbar navbar-toggleable-sm navbar-inverse bg-inverse p-0">
  	<div class="container">
  		<button class="navbar-toggler navbar-toggler-right" data-target="#mynavbar" data-toggle="collapse">
  			<span class="navbar-toggler-icon"></span>
  		</button>
  		<a href="index.html" class="navbar-brand mr-3">EventInfo</a>
  		<div class="collapse navbar-collapse" id="mynavbar">
  			<ul class="navbar-nav">
  				<li class="nav-item px-2">
  					<a href="index.html" class="nav-link">Dashboard</a>
  				</li>
  				<li class="nav-item px-2">
  					<a href="posts.html" class="nav-link">Posts</a>
  				</li>
  				<li class="nav-item px-2">
  					<a href="categories.html" class="nav-link">Categories</a>
  				</li>
  					
  			</ul>
  			<ul class="navbar-nav ml-auto"> 
  				<li class="nav-item dropdown mr-3">
  					<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
  						<i class="fa fa-user"></i> Welcome Mahesh
  					</a>
  					<div class="dropdown-menu">
						<a href="profile.html" class="dropdown-item"><i class="fa fa-user-circle"></i>Profile</a>
						<a href="settings.html" class="dropdown-item"><i class="fa fa-gear"></i>Settings</a>
  					</div>
  				</li>
  				<li class="nav-item">
  					<a href="login.html" class="nav-link"><i class="fa fa-user-times"></i>Logout</a>
  				</li>
  			</ul>
  		</div>
  	</div>
  	
  </nav>

<!--Header-->
<header id="main-header" class="bg-primary py-2 text-white">
	<div class="container">
		<div class="row">
			<div class="col-6-md">
				<h1><i class="fa fa-pencil"></i>Posts One</h1>
			</div>
		</div>
	</div>
</header>
 
 <!--Section-->
 <section id="sections" class="py-4 mb-4 bg-faded">
 	<div class="container">
 		<div class="row">
 			<div class="col-md-3 mr-auto">
 				<a href="index.html" class="btn btn-secondary btn-block"><i class="fa fa-arrow-left"></i>Back To Dashboard</a>
 			</div>
 			
 		</div>
 	</div>
 </section>
 
 <!--POSTS-->
 <section id="posts">
 	<div class="container">
 		<div class="row">
 			<div class="col">
 				<div class="card">
 					<div class="card-header">
 						<h4>View Post</h4>
 					</div>
 					<div class="card-block">
 						<form>
 					<div class="form-group">
						<label for="title" class="form-control-label">Title</label>
						<input type="text" class="form-control">
 					</div>
 					<div class="form-group">
 						<label for="category" class="form-control-label">Category</label>
						<input type="text" class="form-control">
 						<!--<select class="form-control">
 							<option>Sports</option>
 							<option>collage</option>
 							<option>Regilious</option>
 							<option>Other</option>
 						</select> -->
 					</div>
 					
 					<!--<div class="form-group">
 						<label for="file">Image Upload</label>
 						<input type="file" class="form-control-file" id="file">
 						<small class="form-text text-muted">Max 3MB</small>
 					</div>
					-->
 					
 					<div class="form-group">
 						<label for="body">Body</label>
 						<textarea name="editor1" class="form-control">aassasasas  ass a s asa sas as a as as as as as as as s as asasaaksalkjlkadj a alsjaioadjoidoadlakjd a lakjdaodaodpaodia ado paodi paodad od aodipao d</textarea>
 					</div>
 				</form>
 					</div>
 				</div>
 			</div>
 		</div>
 	</div>
 </section>
 
 
 
  <script src="js/jquery.min.js"></script>
  <script src="js/tether.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="https://cdn.ckeditor.com/4.9.0/standard/ckeditor.js"></script>
  <script>
	CKEDITOR.replace('editor1');
	</script>
</body>
</html>
