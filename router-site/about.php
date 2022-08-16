<?php include("modules/header/header.php"); ?>


<header class="page-header">
	<inner-column>
		<?php  
			$pageTitle = "About Meee!";
			include("modules/page-header/page-header.php");
		?>
	</inner-column>
</header>	

<section class="about-me">
	<inner-column>
		<?php 
			$heading = "New Me";
			include("modules/graphic-diptych/graphic-diptych.php"); 
		?>
	</inner-column>
</section>

<section class="interests">
	<inner-column>
		<?php 
			$heading = "My interests";
			include("modules/graphic-diptych/graphic-diptych.php"); 
		?>
	</inner-column>
</section>


<?php include("modules/footer/footer.php"); ?>