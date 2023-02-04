<?php if($type == "call-to-action") { ?>

	<p class="teaser alert-voice"><?=$subHeader?></p>
	<h2 class="header attention-voice"><?=ucwords($header)?></h2>

	
		<?php  
			foreach($components as $component) {
				if($component["type"] == "button") {
		?>
				<div class="buttons">	
					<?php include("components/$component[type].php"); ?>
				</div>
				<?php } ?>
			<?php } ?>
	
	

		<?php  
			foreach($components as $component) {
				if($component["type"] == "email-signup") {
					include("components/$component[type].php");
				}
			}
		?>

		<?php  
			foreach($components as $component) {
				if($component["type"] == "image-placeholder") {
					include("components/$component[type].php");
				}
			}
		?>

<?php } ?>