
 <?php

$conn = mysqli_connect("localhost", "root", "", "eveinfo1");


if(isset($_POST['add'])) {
	
	$title = mysqli_real_escape_string($conn,$_POST['title']);
	$category = mysqli_real_escape_string($conn,$_POST['category']);
	$body = mysqli_real_escape_string($conn,$_POST['body']);
	$image1 =  $_FILES['image']['name'];
	 $imageTMP = $_FILES['image']['tmp_name'];

 $folder = "img/";
 move_uploaded_file($imageTMP, $folder.$image1);
	
		
		if($title ==null && $category == null  && $image1 == null && $body == null)
		{
			
			echo "<script>alert('plese check ') </script>";
			
		}
		else
		{
			$sql = "INSERT INTO `book`(`title`, `category`, `body`, `image`)VALUES('$title','$category','$body','$image1')";
			$qry = mysqli_query($conn, $sql);
		}


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
</head>

<body>
	<form method="" action="" enctype="multipart/form-data">
	 <!--<div class="modal fade" id="addPostModel">-->
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header bg-primary text-white">
					<h5 class="modal-title">Add Post</h5>
					<button class="close" data-dismiss="modal"><span>&times;</span></button>
				</div>
				<div class="modal-body">
					
						<div class="form-group">
							<label for="title" class="form-control-label">Title</label>
							<input type="text" name="title" class="form-control">
						</div>
						<div class="form-group">
							<label for="category" class="form-control-label">Category</label>
							<select class="form-control" name="category">
								<option>Sports</option>
								<option>Religious</option>
								<option>Collage</option>
								<option>Other</option>
							</select>
						</div>
						
						<div class="form-group">
							<label for="file">Image Upload</label>
							<input type="file" class="form-control-file" id="file" name="image">
							<small class="form-text text-muted">Max 4MB</small>
						</div>
						
						<div class="form-group">
							<label for="body">Body</label>
							<textarea name="editor1" class="form-control" name="body"></textarea>
						</div>
					
				</div>
				<div class="modal-footer">
					<button class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary" data-dismiss="modal" name="add">Add Post</button>
				</div>
			</div>
		<!--</div>-->
	 
	 </form>
 </body>
 </html>
 
