<?php if($type == "hero") { ?>

		<h1 class="header screaming-voice"><?=$header?></h1>
		<p class="teaser alert-voice"><?=$subHeader?></p>

		<div class="buttons">
			<?php foreach($components as $component) {
				include("components/$component[type].php");
			} ?>
		</div>

<?php } ?>




	