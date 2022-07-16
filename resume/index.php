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

	function renderSkills ($skills) {
		foreach ($skills as $item) {
			include('skills.php');
		}
	}	

	?>
<html>
	<?php include('head.php'); ?>
<body>
	<header class='site-header'>
		<inner-column>
			<?php include('header.php'); ?>
		</inner-column>
	</header>

	<main>
		
		<section class="heading">
			<inner-column>
				<h1 class="screaming-voice">John's Resume</h1>
			</inner-column>
		</section>

		<section class="summary">
			<inner-column>
				<?php include('summary.php'); ?>
			</inner-column>
		</section>

		<section class="jobs">
			<inner-column>
				<?php renderJobs($jobs); ?>
			</inner-column>
		</section>

		<section class="skills">

			<inner-column>
				<?php renderSkills($skills); ?>
			</inner-column>

		</section>

		<section class="skills">

			<inner-column>
				<!-- <?php renderJobs($education); ?> -->
			</inner-column>

		</section>

	</main>

	<footer>
		<section class="inner-column">
			<?php include('footer.php'); ?>
		</section>
	</footer>
	
</body>
</html>