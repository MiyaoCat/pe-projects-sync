<?php include("modules/header/header.php"); ?>


<header class="page-header">
	<inner-column>
		<?php  
			$pageTitle = "Contact Meee!";
			include("modules/page-header/page-header.php");
		?>
	</inner-column>
</header>

<section class="contact-intro">
	<inner-column>
		<?php include("modules/graphic-diptych/graphic-diptych.php"); ?>
	</inner-column>
</section>

<section class="contact-me">
	<inner-column>
		<?=$heading?>
		<?php include("modules/generic-text/generic-text.php"); ?>
	</inner-column>
</section>

<section class="projects-spotlight">
	<inner-column>
		<?php 
			include("modules/projects-spotlight/projects-spotlight.php"); 
		?>
	</inner-column>
</section>

<?php include("modules/footer/footer.php"); ?>