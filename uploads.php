<?php
if(isset($_FILES['uploadedFile'])) {
	$file = $_FILES['uploadedFile'];
	//die(var_dump($_FILES));
	move_uploaded_file($file['tmp_name'], 'images/'.$file['name']);
}

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>File Uploads</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
	</head>
	<body>
		<div class="container">
			<h1>Let's upload some files!</h1>
			<hr>
			<form action="" method="post" class="form-inline" enctype="multipart/form-data">
				<div class="form-group">
					<label for="uploadedFile">Upload your file:</label>
					<input type="file" name="uploadedFile" class="form-control">
				</div>
				<button type="submit" class="btn btn-default">Upload</button>
			</form>
		</div>
	</body>
</html>
