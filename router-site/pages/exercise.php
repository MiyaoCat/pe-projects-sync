<?php 
	$json = file_get_contents("data/exercises.json");
	$exercises = json_decode($json, true);
 
	foreach ($exercises as $exercise) {
		if ($exercise["slug"] == $_GET["slug"]) {
			$selectedExercise = $exercise;
		}
	}

	$title = $selectedExercise["title"];
	$intro = $selectedExercise["intro"];
	$slug = $selectedExercise["slug"];
?>

<article>
	<header class="page-header">
		<inner-column>
			<h1 class="loud-voice"><?=$title?></h1>
			<p><?=$intro?></p>
		</inner-column>
	</header>


		<section>
			<inner-column>
				<?php 
					include("exercises/$slug.php"); 
				?>
			</inner-column>
		</section>

</article>