<!DOCTYPE html>

<?php 
	$json = file_get_contents('resume.json');
	$resumeData = json_decode($json, true);

	//create a function
	function getResumeItemsbyType ($items, $type) {
		// create a filtered array
		$filtered = [];

		//look at each item from database
		foreach ($items as $item) {

			//find items of a given type	

			//if it's the right type
			if ($item['type'] == $type) {

				//add the item to a filtered arrray
				array_push($filtered, $item);
			}
		}	
		return $filtered;
	}

	$skills = getResumeItemsbyType($resumeData, 'skill');
	
	$jobs = getResumeItemsbyType($resumeData, 'job');
	
	function renderJobs ($jobs) {
		foreach ($jobs as $item) {
			include('experience-card.php');
		}
	}	

	?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

	<meta property="og:image" content="[IMAGE URL]">
	<meta name="description" content="[SHORT PAGE DESCRIPTION]">
	<title>John Miyao's Career Story</title>

	<link rel="stylesheet" href="css/style.css">

</head>
<body>
	<header>
		<section class='inner-column'>
			
		</section>
	</header>

	<main>

		<section class="heading">
			<h1 class="screaming-voice">John's Resume</h1>
		</section>

		<section class="page-content">

			<?php renderJobs($jobs); ?>

		</section>

		<section class="page-content">

			

		</section>

	</main>

	<footer>
		<section class="inner-column">
			<?php include('footer.php'); ?>
		</section>
	</footer>
	
</body>
</html>