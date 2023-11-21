<?php 

include 'config/db.php';

if (isset($_POST['submit'])) {
	$var_title = mysqli_real_escape_string($conn, $_POST['title']);
	$var_body = mysqli_real_escape_string($conn, $_POST['body']);
	$var_author = mysqli_real_escape_string($conn, $_POST['author']);


	$query = "INSERT INTO posts (title, body, author) VALUES ('$var_title', '$var_body', '$var_author')";

	if (mysqli_query($conn, $query)) {
		header('Location: index.php');
	}
	else{
		echo "Something Wrong";
	}
}


?>





<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Simple Blog</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="create.php">Create</a>
        </li>
      </ul>
    </div>
  </div>
</nav>



	<div class="container">
		<div class="row justify-content-center my-5">
			<div class="col-lg-6">
				<div class="card">
					<div class="card-header">
						<h4 class="card-title">Create New Post</h4>
					</div>
					<div class="card-body">
						<form action="" method="POST">
							<div class="mb-3">
								<input type="text" name="title" class="form-control" placeholder="Input Post title" required>
							</div>

							<div class="mb-3">
								<textarea name="body" class="form-control" placeholder="Input Post Details" required></textarea>
							</div>

							<div class="mb-3">
								<input type="text" name="author" class="form-control" placeholder="Input Post Author" required>
							</div>

							<div class="mb-3 d-grid">
								<input type="submit" name="submit" class="btn btn-success" value="Create">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>