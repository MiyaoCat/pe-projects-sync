<?php if($type == "call-to-action") { ?>

	<p class="teaser alert-voice"><?=$subHeader?></p>
	<h2 class="header attention-voice"><?=$header?></h2>

	<div class="buttons">
		<?php  
			foreach($components as $component) {
				if($component["type"] == "button") {
					include("components/$component[type].php");
				}
			}
		?>
	</div>

<?php } ?>