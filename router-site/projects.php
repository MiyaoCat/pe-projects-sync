<?php include("modules/header/header.php"); ?>

	<header class="page-header">
		<inner-column>
			<?php  
				$pageTitle = "My Projects";
				include("modules/page-header/page-header.php");
			?>
		</inner-column>
	</header>
		
	<section class="projects-grid">
		<inner-column>
			<?php 
				$heading = "Project I";
				include("modules/graphic-diptych/graphic-diptych.php"); 
			?>
		</inner-column>
	</section>

	<section class="projects-grid">
		<inner-column>
			<?php 
				$heading = "Project II";
				include("modules/graphic-diptych/graphic-diptych.php"); 
			?>
		</inner-column>
	</section>

	<section class="projects-grid">
		<inner-column>
			<?php 
				$heading = "Project III";
				include("modules/graphic-diptych/graphic-diptych.php"); 
			?>
		</inner-column>
	</section>

<?php include("modules/footer/footer.php"); ?>