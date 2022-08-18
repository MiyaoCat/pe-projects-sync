<?php 
$json = file_get_contents("data/data-pages/goals.json");
$goalsData = json_decode($json, true);
?>

<goals-module>
	<?php foreach ($goalsData as $goalSection) { ?>
	<section>
		<h2 class="attention-voice"><?=$goalSection["heading"]?></h2>

		<ol>
			<?php foreach ($goalSection["goals"] as $goal) { ?>
			<li>
				<p><?=$goal?></p>
			</li>
			<?php } ?>
		</ol>

	</section>
	<?php } ?>
</goals-module>