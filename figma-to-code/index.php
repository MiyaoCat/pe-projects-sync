<?php include("partials/header.php"); ?>
<main>
<inner-column>
	<?php  
		$json = file_get_contents("data/modules.json");
		$moduleData = json_decode($json, true);

		foreach ($moduleData as $module) {
			$type = $module['type'];
			$header = $module['header'];
			$subHeader = $module['sub-header'];
			$components = $module['components'];
	?>	

		<?php include("modules/hero.php"); ?>

	<?php } ?>
</inner-column>
</main>


<?php include("partials/footer.php"); ?> 