<?php
if(isset($_FILES['uploadedFile'])) {
	$file = $_FILES['uploadedFile'];

	$filename = $file['name'];
	$ext = strrchr($filename, ".");

	$allowedExts = [".png", ".jpg", ".jpeg", ".bmp", ".gif"];

	if(!in_array($ext, $allowedExts)) {
		header('Location: uploads.php?message=Invalid+file');
	}

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
			<?php
				if(isset($_GET['message'])) {
			?>
			<div class="alert alert-dismissable alert-danger">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<strong>Error!</strong> <?=$_GET['message'];?>
			</div>
			<?php
				}
			?>
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
