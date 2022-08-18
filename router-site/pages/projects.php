
	
<?php  
	$pageTitle = "My Projects";
	include("modules/page-header/page-header.php");
?>
		
		
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
				$heading = "<a href='projects/project-three/index.php'>Project III</a>";
				include("modules/graphic-diptych/graphic-diptych.php"); 
			?>
		</inner-column>
	</section>
