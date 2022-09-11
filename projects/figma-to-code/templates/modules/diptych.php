<?php  
	if ($type == "diptych") {
		$header = $module["header"];
		$subHeader = $module["subHeader"];
		$figure = $module["figure"];
	}	
?>

<h2 class="attention-voice"><?=$header?></h2>
<p class="normal-voice"><?=$subHeader?></p>

<picture>
	<img src="<?=$figure?>" alt="support figure for <?=$header?>" style="max-width: 200px">
</picture>
