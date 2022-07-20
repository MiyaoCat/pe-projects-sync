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


<body>
	<header class="site-header">
		<inner-column>
			<?php include('header.php'); ?>
		</inner-column>
	</header>

	<main>
		<section class="layout1">
			<inner-column>
				<?php include('layouts/layout1.php'); ?>
			</inner-column>
		</section>

		<section class="layout2">
			<inner-column>
				<?php include('layouts/layout2.php'); ?>
			</inner-column>
		</section>

		<section class="layout3">
			<!-- <inner-column> -->
				<?php include('layouts/layout3.php'); ?>
			<!-- </inner-column> -->
		</section>

		<section class="layout4">
			<inner-column>
				<?php include('layouts/layout4.php'); ?>
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