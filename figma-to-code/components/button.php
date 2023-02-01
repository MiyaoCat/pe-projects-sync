
<?php 
	if($component["type"] == "button") { 
		$buttonStyle = $component["style"];
		$buttonText = $component["text"];
		$buttonSize = $component["size"];
		$buttoncorners = $component["corners"];
?>
	<button class="<?=$buttonStyle?> <?=$buttonSize?> <?=$buttoncorners?>">
		<?=$buttonText?>
	</button>

<?php } ?>