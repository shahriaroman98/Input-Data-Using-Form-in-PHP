<?php 

include 'config/db.php';

//create query
$query = "SELECT * FROM posts ORDER BY id DESC";

//get result
$result = mysqli_query($conn, $query);

//fetch(display) data
$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);


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
		<?php foreach ($posts as $data): ?>
		<div class="row justify-content-center my-5">
			<div class="col-lg-6">
				<div class="card">
					<div class="card-header">
						<h4 class="card-title"><?php echo $data['title']; ?></h4>
					</div>
					<div class="card-body"><p><?php echo $data['body']; ?></p></div>
					<div class="card-footer">
						<p>Created On <span class="text-primary"><?php echo $data['created_at']; ?></span> By <span class="text-primary"><?php echo $data['author']; ?></span></p>
					</div>
				</div>
			</div>
		</div>
	<?php endforeach ?>
	</div>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>