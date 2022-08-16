
<?php include("modules/header/header.php"); ?>

<header class="page-header">
	<inner-column>
		<?php  
			$pageTitle = "Hello, World! I'm John.";
			include("modules/page-header/page-header.php");
		?>
	</inner-column>
</header>

<section class="new-stuff">
	<inner-column>
		<?php 
			$heading = "New Stuff";
			include("modules/graphic-diptych/graphic-diptych.php"); 
		?>
	</inner-column>
</section>

<section class="projects-spotlight">
	<inner-column>
		<?php 
			$heading = "Project Spotlight";
			include("modules/projects-spotlight/projects-spotlight.php"); 
		?>
	</inner-column>
</section>

<?php include("modules/footer/footer.php"); ?>

</body>
</html>