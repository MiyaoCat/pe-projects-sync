<section class="projects-spotlight">
		<inner-column>
			<?php 
				$heading = "Project Spotlight";
				include("modules/projects-spotlight/projects-spotlight.php"); 
			?>
		</inner-column>
	</section>

<section class="new-stuff">
	<inner-column>
		<?php 
			$heading = "New Stuff";
			$flipped = false;
			include("modules/graphic-diptych/graphic-diptych.php"); 
		?>
	</inner-column>
</section>

<section class="old-stuff">
	<inner-column>
		<?php 
			$heading = "Old Stuff";
			$flipped = true;
			include("modules/graphic-diptych/graphic-diptych.php"); 
		?>
	</inner-column>
</section>