<?php
$name = "Peter Ojo";
require 'partials/countries.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>PHP Course</title>
	</head>
	<body>
		<h1>My PHP page</h1>
		<p>Hello my name is <?php echo $name; ?></p>
		<select name="">
			<option value="">Select Country</option>
			<?php foreach($countries as $country) { ?>
				<option value=""><?php echo $country; ?></option>
			<?php } ?>
		</select>
	</body>
</html>
