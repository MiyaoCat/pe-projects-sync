<?php if($type == "center-content") { ?>
	<?php if ( isset($module['sub-header2']) ) { ?>
		<p class="alert-voice"><?=$module['sub-header2']?></p>
	<?php } ?>

	<h2 class="sub-header attention-voice"><?=$header?></h2>
	<p class="info alert-voice"><?=$subHeader?></p>

	<div class="video">
		<?php foreach($components as $component) {
			include("components/$component[type].php");
		} ?>
	</div>

<?php } ?>