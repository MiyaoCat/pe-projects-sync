<?php include("partials/header.php"); ?>
<main>
<inner-column>
	<?php

		$page = "home";
		if ( isset($_GET["page"]) ) {
			$page = $_GET["page"];
		}

		$pageDataFilePath = "data/pages/$page.json";
		$pageData = null;

		if ( file_exists($pageDataFilePath) ) {
			$jsonData = file_get_contents($pageDataFilePath);
			$pageData = json_decode($jsonData, true);
		}

		$json = file_get_contents("data/pages/template1.json");
		$template1Modules = json_decode($json, true);

		foreach ($template1Modules['modules'] as $module) {
			$type = $module['type'];
			$header = $module['header'];
			$subHeader = $module['sub-header'];
			$components = $module['components'];
	?>	

		<?php include("modules/$type.php"); ?>

	

	<?php } ?>
</inner-column>
</main>


<?php include("partials/footer.php"); ?> 