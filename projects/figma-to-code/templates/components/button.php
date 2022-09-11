<?php
if ($component["arrows"] == "none") {
	$text = $component["text"];
	$buttonType = $component["buttonType"];
	$corners = $component["corners"];
	$arrows = $component["arrows"];
	$style = $component["style"];
	$size = $component["size"];
?>		

	<button class="<?=$buttonType?> <?=$corners?> <?=$arrows?> <?=$style?> <?=$size?>">
		<p class="normal-voice"><?=$text?></p>
	</button>

<?php } ?>


<?php if ( isset($component["arrowFile"]) ) { 
	$arrowFile = $component["arrowFile"];
	$text = $component["text"];
	$buttonType = $component["buttonType"];
	$corners = $component["corners"];
	$arrows = $component["arrows"];
	$style = $component["style"];
	$size = $component["size"];
?>

	 <button class="<?=$buttonType?> <?=$corners?> <?=$arrows?> <?=$style?> <?=$size?>">
		<p class="normal-voice"><?=$text?></p>
		<?php include("$arrowFile"); ?>
	</button>

<?php } ?>