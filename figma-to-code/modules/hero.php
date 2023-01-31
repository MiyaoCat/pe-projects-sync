<?php if($type == "hero") { ?>

	<section class=<?=$type?>>
		<p class="attention-voice"><?=$header?></p>
		<p class="normal-voice"><?=$subHeader?></p>

		<div class="buttons">
			<?php foreach($components as $component) {
				include("components/$component[type].php");
			} ?>

		</div>

	</section>
<?php } ?>




	