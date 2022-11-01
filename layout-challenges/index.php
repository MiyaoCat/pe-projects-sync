<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

	<meta property="og:image" content="[IMAGE URL]">
	<meta name="description" content="Layout gardening">
	<title>Layout Challenges</title>

	<link rel="stylesheet" href="css/style.css">
</head>


<body>
	<header class="site-header">
		<inner-column>
			<?php include('header.php'); ?>
		</inner-column>
	</header>

	<main>
		<section class="layout1">
			<inner-column>
				<div class='header'>
					<h1 class="screaming-voice">Monday Layout</h1>
				</div>

				<?php include('layouts/layout1.php'); ?>

			</inner-column>
		</section>

		<section class="layout2">
			<inner-column>
				<?php include('layouts/layout2.php'); ?>
			</inner-column>
		</section>

		<section class="layout3" id="wednesday">
			<inner-column>
				<div class='header'>
					<h1 class="screaming-voice">Wednesday Layout #1</h1>
				</div>
						
					<?php include('layouts/layout3.php'); ?>
			</inner-column>
		</section>

		<section class="layout4">
			<inner-column>
				<div class='header'>
					<h1 class="screaming-voice">Wednesday Layout #2</h1>
				</div>

				<?php include('layouts/layout4.php'); ?>
			</inner-column>
		</section>

		<section class="layout5" id="thursday">
			<inner-column>
				<div class='header'>
					<h1 class="screaming-voice">Player's Tribune </h1>
				</div>

				<?php include('layouts/layout5.php'); ?>
			</inner-column>
		</section>

		<section class="layout6" id="the-north-face">
			<inner-column>
				<div class='header'>
					<h1 class="screaming-voice">The North Face </h1>
				</div>

				<?php include('layouts/layout5.php'); ?>
			</inner-column>
		</section>
	</main>

	<footer>
		<inner-column>
			<?php include('footer.php'); ?>
		</inner-column>
	</footer>
	
</body>
</html>