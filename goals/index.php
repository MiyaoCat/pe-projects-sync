<!DOCTYPE html>


<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta property="og:image" content="https://peprojects.dev/alpha-4/john/meta-image2.jpg">
	<meta name="description" content="A list of my goals as I complete Design for the Web's web dev and web design course.">

	<title>Goals for DFTW and Beyond!</title>

	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<header class='site-header'>
		<?php include('header.php'); ?>
	</header>

	<main class="page-content">
		<inner-column>
			<?php 
				$json = file_get_contents('goals-data.json');
				$goals = json_decode($json, true);
 	
				foreach ($goals as $goal) {
					$title = $goal['title'];
				

			?>
			<ul>
				<li><?=$title?></li>
			</ul>

		<?php } ?>
		</inner-column>
		
	</main>

	<footer>
		<?php include('footer.php'); ?>
		
	</footer>
		
</body>

</html>