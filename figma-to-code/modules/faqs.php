<?php if($type == "faqs") { ?>

	<h2 class="header attention-voice"><?=$header?></h2>
	<p class="teaser alert-voice"><?=$subHeader?></p>		

	<?php  
		foreach($components as $component) {
			if($component["type"] == "accordion") {
				include("components/$component[type].php");
			}
		}
	?>

<?php } ?>