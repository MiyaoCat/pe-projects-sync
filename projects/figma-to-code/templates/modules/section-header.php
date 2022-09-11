<?php  
if ($section["name"] !== "call-to-action") {
	if ($type == "section-header") {
		$header = $module["header"];
		$subHeader = $module["subHeader"];
	}
?>

	<h1 class="header loud-voice"><?=$header?></h1>
	<p class="sub-header normal-voice"><?=$subHeader?></p>
<?php } ?>

<?php 
	if ($section["name"] == "call-to-action") {
		if ($type == "section-header") {
			$header = $module["header"];
			$subHeader = $module["subHeader"];
		}
?>

	<p class="sub-header normal-voice"><?=$subHeader?></p>
	<h1 class="header loud-voice"><?=$header?></h1>
<?php } ?>

