

<?php  
	$pageTitle = "Living Style Guide";
	include("modules/page-header/page-header.php");
?>

<section>
	<inner-column>
		<?php include("modules/generic-text/generic-text.php"); ?>
	</inner-column>
</section>

<section>
	<inner-column>
		<?php 
		$content = "<h2 class='attention-voice'>A Different Generic-text Heading</h2> <p>This has two paragaraphs to show you some versatility.</p> <p>Here's a <a href='#'>Sneaky link</a> and some <strong>emphasis</strong>. This content is written directly on the style-guide and not from the module.</p>";
		include("modules/generic-text/generic-text.php"); ?>
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

<section class="goals">
	<inner-column>		
		<?php 
			$heading = "GOOOAAALS";
			include("modules/goals-list/goals-list.php"); ?>
	</inner-column>
</section>


