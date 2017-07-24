<?php
$videos = [
	['id' => 1, 'name' => 'Slum Dog Millionaire'],
	['id' => 2, 'name' => 'Rush Hour'],
	['id' => 3, 'name' => 'Transformers'],
	['id' => 4, 'name' => 'Get Cool'],
	['id' => 5, 'name' => 'Die Hard'],
	['id' => 5, 'name' => 'Titanic']
];
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Working with Forms</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
	</head>
	<body>
		<div class="container">
			<h1>We are dealing with with forms now! Hooray!</h1>
			<hr>
			<ul>
				<?php foreach($videos as $video) { ?>
				<li>
					<a href="video.php?id=<?=$video['id']?>">
						<?=$video['name']?>
					</a>
				</li>
				<?php } ?>
			</ul>
			<div class="row">
				<div class="col-md-6">
					<form action="process_form_data.php" method="post">
						<div class="form-group">
							<label for="name">Name</label>
							<input type="text" name="name" id="name" class="form-control" required>
						</div>
						<div class="form-group">
							<label for="email">Email</label>
							<input type="email" name="email" id="email" class="form-control">
						</div>
						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" name="password" id="password" class="form-control">
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-default">Submit</button>
						</div>
					</form>
				</div>
				<div class="col-md-6"></div>
			</div>

		</div>
	</body>
</html>
