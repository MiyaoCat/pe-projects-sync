<?php  
	if ($type == "page-header") {
		$header = $module["header"];
		$subHeader = $module["subHeader"];
?>

	<h1 class="header shout-voice"><?=$header?></h1>
	<p class="sub-header normal-voice"><?=$subHeader?></p>

<?php } ?>