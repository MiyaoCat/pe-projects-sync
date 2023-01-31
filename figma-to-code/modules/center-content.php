<?php if($type == "center-content") { ?>

	<section class=<?=$type?>>
		<p class="attention-voice"><?=$header?></p>
		<p class="normal-voice"><?=$subHeader?></p>

		<div class="video">
			<?php foreach($components as $component) {
				include("components/$component[type].php");
			} ?>
		</div>

	</section>

<?php } ?>