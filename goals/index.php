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

	<main class="goals">
		<inner-column>
			<h1 class="loud-voice">MY GOALS</h1>
			<?php 

				$json = file_get_contents("goals.json");
				$goalsData = json_decode($json, true);
 	
				foreach ($goalsData as $goals) {
			?>
				<goal-card>
				<ul>
					<heading>
						<h2 class="attention-voice">
						<?=$goals['heading']?></h2>
					</heading>

					<?php foreach ($goals['goals'] as $goal) {  ?>
						<ul class="sub-goals">
							<li><p class="normal-voice">
								<?=$goal?></p>
							</li>	
						</ul>
					<?php } ?>
				</ul>
				</goal-card>

			<?php } ?>
		</inner-column>
		
	</main>

	<footer>
		<inner-column>
			<?php include('footer.php'); ?>

			<?php 
				date_default_timezone_set('UTC');
				echo date("F jS, Y");
			 ?>
		 </inner-column>
	</footer>
		
</body>

</html>
















