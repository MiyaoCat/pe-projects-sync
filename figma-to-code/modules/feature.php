<?php if($type == "feature") { ?>
	
	<p class="attention-voice"><?=$header?></p>
	<p class="normal-voice"><?=$subHeader?></p>

	<div class="image">
		<?php 
			foreach($components as $component) {
				if($component["type"] == "image-placeholder"){
					include("components/$component[type].php");
				}
			} ?>
	</div>

	<div class="feature-list">
		<?php 
			foreach($components as $component) {
				if($component["type"] == "feature-list") {
					include("components/$component[type].php");
				}
			} ?>
	</div>

<?php } ?>