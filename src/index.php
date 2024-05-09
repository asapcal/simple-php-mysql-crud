<?php
	header('Content-Type: json_decode(json)');
	header('Character-Encoding: utf-8');


    include "config.php";

    $sql = "SELECT * FROM users";

    $result = $conn->query($sql);
?>

<!DOCTYPE html>
	<html lang="pt-br">
		<head>
			<meta charset="utf-8">
			<link href="https://fonts.googleapis.com/css?family=Mali" rel="stylesheet">
			<title>PHPCRUD</title>
			<link rel="stylesheet" href="css/estilo.css">
		</head>
		<body>
			<div class="container">
				<nav>
					<ul class="menu">
						<li><a href="view.php">View</a></li>
						<li><a href="create.php">Create</a></li>
						<li><a href="view.php">Update</a></li>
                        <li><a href="view.php">Delete</a></li>


				</nav>
			</div>
		</body>
	</html>

	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
