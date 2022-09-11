<?php  
	if ($type == "sub-header") {
		$header = $module["header"];
		$subHeader = $module["subHeader"];	
		$supportTextB = $module["supportTextB"];
?>

<p class="normal-voice"><?=$subHeader?></p>
<h2 class="attention-voice"><?=$header?></h2>
<p class="normal-voice"><?=$supportTextB?></p>

<?php } ?>