
<?php include("modules/header/header.php"); ?>


<?php  
	$pageTitle = "Hello, World! I'm John.";
	$pageIntro = "Welcome to my internet home, World.";
	include("modules/page-header/page-header.php");
?>


<main>
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
</main>

<?php include("modules/footer/footer.php"); ?>

</body>
</html>