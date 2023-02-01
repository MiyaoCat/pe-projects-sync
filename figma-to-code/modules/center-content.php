<?php if($type == "center-content") { ?>

	<h2 class="sub-header attention-voice"><?=$header?></h2>
	<p class="info normal-voice"><?=$subHeader?></p>

	<div class="video">
		<?php foreach($components as $component) {
			include("components/$component[type].php");
		} ?>
	</div>

	<?php if ( isset($module['sub-header2']) ) { ?>
		<p class="normal-voice"><?=$module['sub-header2']?></p>
	<?php } ?>

<?php } ?>