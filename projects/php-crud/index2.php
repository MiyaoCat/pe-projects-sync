<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta property="og:image" content="[IMAGE URL]">
	<meta name="description" content="[SHORT PAGE DESCRIPTION]">
	<title></title>

	<link rel="stylesheet" href="css/style.css">
</head>

<?php 
	$json = file_get_contents('data/players.json');

	$playersData = json_decode($json, true);
	$players = $playersData['playersData'];
	
?>

<body>
	
	<header>
		<section class='inner-column'>
			<nav class="mast-head">
				<ul>
					<li>ATHLETES</li>
				</ul>
			</nav>
		</section>
	</header>

	<main>
		<section class="inner-column">

		</section>

	</main>

	<footer>
		<section class="inner-column">
			
		</section>
	</footer>
	
</body>

</html>