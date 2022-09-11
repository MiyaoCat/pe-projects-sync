<?php  
	if ($type == "diptych") {
		$header = $module["header"];
		$subHeader = $module["subHeader"];
		$figure = $module["figure"];
	}	
?>

<div class="heading">
	<h2 class="attention-voice"><?=$header?></h2>
	<p class="normal-voice"><?=$subHeader?></p>
</div>


<picture>
	<img src="<?=$figure?>" alt="support figure for <?=$header?>">
</picture>
