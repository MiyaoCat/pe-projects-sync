<?php if($type == "hero") { ?>

		<p class="attention-voice"><?=$header?></p>
		<p class="normal-voice"><?=$subHeader?></p>

		<div class="buttons">
			<?php foreach($components as $component) {
				include("components/$component[type].php");
			} ?>
		</div>

<?php } ?>




	