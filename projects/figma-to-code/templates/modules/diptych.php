<?php  
	if ($type == "diptych") {
		$header = $module["header"];
		$supportTextA = $module["supportTextA"];	
		$figure = $module["figure"];
	}	
?>

<h2 class="attention-voice"> <?=$header?></h2>
<p class="normal-voice"><?=$supportTextA?></p>

<picture>
	<img src="<?=$figure?>" alt="support figure for <?=$header?>" style="max-width: 200px">
</picture>
