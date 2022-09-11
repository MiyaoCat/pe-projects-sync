<?php  
	if ($type == "section-header") {
		$header = $module["header"];
		$subHeader = $module["subHeader"];

		if ( isset($module["subHeader2"]) ) {
			$subHeader2 = $module["subHeader2"];
		}
?>
	<p class="sub-header normal-voice"><?=$subHeader?></p>
	<h1 class="header loud-voice"><?=$header?></h1>
	<p class="sub-header2 normal-voice"><?=$subHeader2?></p>
<?php } ?>