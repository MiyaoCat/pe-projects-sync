<?php if($type == "call-to-action") { ?>

	<p class="teaser alert-voice"><?=$subHeader?></p>
	<h2 class="header attention-voice"><?=ucwords($header)?></h2>

	<div class="buttons">
		<?php  
			foreach($components as $component) {
				if($component["type"] == "button") {
					include("components/$component[type].php");
				}
				if($component["type"] == "email-signup") {
					include("components/$component[type].php");
				}
			} 


		?>
	</div>

		<?php  
			// foreach($components as $component) {
			// 	if($component["type"] == "email-signup") {
			// 		include("components/$component[type].php");
			// 	}
			// }
		?>

		<?php  
			foreach($components as $component) {
				if($component["type"] == "image-placeholder") {
					include("components/$component[type].php");
				}
			}
		?>
<?php } ?>