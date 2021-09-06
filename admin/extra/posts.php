<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
  <title>EventInfo Admin Area</title>
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
  					<a href="posts.html" class="nav-link active">Posts</a>
  				</li>
  				
  					
  			</ul>
  			<ul class="navbar-nav ml-auto"> 
  				
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
				<h1><i class="fa fa-pencil"></i>Posts</h1>
			</div>
		</div>
	</div>
</header>
 
 <!--Section-->
 <section id="sections" class="py-4 mb-4 bg-faded">
 	<div class="container">
 		<div class="row">
 			<div class="col-md-6 offset-md-6">
 				<div class="input-group">
 					<input type="text" class="form-control" placeholder="Search Posts...">
 					<span class="input-group-btn">
 						<button class="btn btn-primary">Search</button>
 					</span>
 				</div>
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
 					<div class="card-title">
 						<h4>Latest Posts</h4>
 					</div>
 					<table class="table table-striped">
 						<thead class="thead-inverse">
 							<tr>
 								<th>#</th>
 								<th>Title</th>
 								<th>Religious</th>
 								<th>Data Posted</th>
 								<th></th>
 							</tr>
 						</thead>
 						<tbody>
 							<tr>
							  <td>1</td>
							  <td>Post One</td>
							  <td>Sports</td>
							  <td>Feb 01, 2018</td>
								<td><a href="details.html" class="btn btn-secondary"><em class="fa fa-angle-double-right"></em>Details</a></td>
 							</tr>
 							<tr>
							  <td>2</td>
							  <td>Post Two</td>
							  <td>Collage</td>
							  <td>Feb 01, 2018</td>
								<td><a href="details.html" class="btn btn-secondary"><em class="fa fa-angle-double-right"></em>Details</a></td>
 							</tr>
 							<tr>
							  <td>3</td>
							  <td>Post Three</td>
							  <td>Religious</td>
							  <td>Feb 01, 2018</td>
								<td><a href="details.html" class="btn btn-secondary"><em class="fa fa-angle-double-right"></em>Details</a></td>
 							</tr>
 							<tr>
							  <td>4</td>
							  <td>Post Four</td>
							  <td>Sports</td>
							  <td>Feb 01, 2018</td>
								<td><a href="details.html" class="btn btn-secondary"><em class="fa fa-angle-double-right"></em>Details</a></td>
 							</tr>
 							<tr>
							  <td>5</td>
							  <td>Post Five</td>
							  <td>Sports</td>
							  <td>Feb 01, 2018</td>
								<td><a href="details.html" class="btn btn-secondary"><em class="fa fa-angle-double-right"></em>Details</a></td>
 							</tr>
 							<tr>
							  <td>6</td>
							  <td>Post Six</td>
							  <td>Collage</td>
							  <td>Feb 01, 2018</td>
								<td><a href="details.html" class="btn btn-secondary"><em class="fa fa-angle-double-right"></em>Details</a></td>
 							</tr>
 						</tbody>
 					</table>
 					 <nav class="ml-4">
 					 	<ul class="pagination">
 					 		<li class="page-item disabled"><a href="#" class="page-link">Previous</a></li>
 					 		<li class="page-item active"><a href="#" class="page-link">1</a></li>
 					 		<li class="page-item"><a href="#" class="page-link">2</a></li>
 					 		<li class="page-item"><a href="#" class="page-link">3</a></li>
 					 		<li class="page-item"><a href="#" class="page-link">Next</a></li>
 					 	</ul>
 					 </nav>
 				</div>
 			</div>
 		</div>
 	</div>
 </section>
 
 <!--Header Posts-->
 <div class="modal fade" id="addPostModel">
 	<div class="modal-dialog modal-lg">
 		<div class="modal-content">
 			<div class="modal-header bg-primary text-white">
 				<h5 class="modal-title">Add Post</h5>
				<button class="close" data-dismiss="modal"><span>&times;</span></button>
 			</div>
 			<div class="modal-body">
 				<form>
 					<div class="form-group">
						<label for="title" class="form-control-label">Title</label>
						<input type="text" class="form-control">
 					</div>
 					<div class="form-group">
 						<label for="category" class="form-control-label">Category</label>
 						<select class="form-control">
 							<option>Web Development</option>
 							<option>Tech Gadgets</option>
 							<option>Business</option>
 							<option>Health & wellness</option>
 						</select>
 					</div>
 					
 					<div class="form-group">
 						<label for="file">Image Upload</label>
 						<input type="file" class="form-control-file" id="file">
 						<small class="form-text text-muted">Max 3MB</small>
 					</div>
 					
 					<div class="form-group">
 						<label for="body">Body</label>
 						<textarea name="editor1" class="form-control"></textarea>
 					</div>
 				</form>
 			</div>
 			<div class="modal-footer">
 				<button class="btn btn-secondary" data-dismiss="modal">Close</button>
 				<button class="btn btn-primary" data-dismiss="modal">Add Post</button>
 			</div>
 		</div>
 	</div>
 </div>
 
 <!--Modal Category-->
 
  <div class="modal fade" id="addCategoryModel">
 	<div class="modal-dialog modal-lg">
 		<div class="modal-content">
 			<div class="modal-header bg-success text-white">
 				<h5 class="modal-title">Add Category</h5>
				<button class="close" data-dismiss="modal"><span>&times;</span></button>
 			</div>
 			<div class="modal-body">
 				<form>
 					<div class="form-group">
 					<label for="title" class="form-control-label">Title</label>
 					<input type="title" class="form-control">
 					</div>
 				</form>
 			</div>
 			<div class="modal-footer">
 				<button class="btn btn-secondary" data-dismiss="modal">Close</button>
 				<button class="btn btn-success" data-dismiss="modal">Add Category</button>
 			</div>
 		</div>
 	</div>
 </div>
 
 
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
</body>
</html>
