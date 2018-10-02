<?php
	if(!isset($_SESSION['connected']))
	{
		$_SESSION['connected'] = 0;
	}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Site Ben&ALexis (Provisoire)</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/x-icon" href="style/img/f1.png" />
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.min.css">
	<script type="text/javascript" src="bootstrap/bootstrap.min.js"></script>

	<link rel="stylesheet" type="text/css" href="style/css/style.css">
</head>
<body>
	<?php
	include 'fonction/function.php';
		echo headerNav(); 
	?>
</body>
</html>