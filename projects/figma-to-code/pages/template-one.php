<?php  
	$json = file_get_contents("../data/pages/template-one.json");
	$templateOne = json_decode($json, true);

	foreach ($templateOne["sections"] as $section) {
		$module = $section["module"];

		$header = $section["header"];
		$subHeader = $section["subHeader"];
	}

	if ( isset($module) ) {
		include("../templates/modules/$module.php");
	}

	foreach ($section["buttons"] as $button) {
		$buttonContained = $button["button-contained"];
		$buttonOutline = $button["button-outline"];
	}
?>

