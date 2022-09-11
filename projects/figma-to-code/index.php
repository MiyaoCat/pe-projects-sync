<?php include("partials/site-header.php"); ?>
<?php  
	$json = file_get_contents("data/pages/template-uno.json");
	$templateUno = json_decode($json, true);
?>

<?php 
	$page = "home";
	if ( isset($_GET["page"]) ) {
		$page = $_GET["page"];
	}

	$pageDataFilePath = "data/pages/$page.json";
	$pageData = null;

	if ( file_exists($pageDataFilePath) ) {
		$thePageDataJson = file_get_contents("data/pages/$page.json");
		$pageData = json_decode($thePageDataJson, true);
	}
?>

	<?php foreach ($templateUno["sections"] as $section) {
				$name = $section["name"];		
	?>

	<section class="<?=$name?>">
		<inner-column>

			<?php foreach ($section["modules"] as $module) {
						$type = $module["type"];
			?>

				<module class="<?=$type?>">
					<?php include("templates/modules/$type.php"); ?>
				</module>		

				<?php if ( isset($section["components"]) ) { ?>

					<div class="action">
						<?php	
							foreach ($section["components"] as $component) {
								if ($component["type"] == "button") {
									$type = $component["type"];
						
									include("templates/components/$type.php");
								}
							} ?>
					</div>

					<?php	
						foreach ($section["components"] as $component) {
							if ($component["type"] !== "button") {
								$type = $component["type"];
								$fileType = $component["fileType"];
							
								include("templates/components/$type.$fileType");	
							}
						}

					} ?>

					<?php if ( isset($section["icons"]) ) {

						foreach ($section["icons"] as $icon) {
							$type = $icon["type"];
							$iconType = $icon["iconType"];
						?>
						
						<icon class="<?=$iconType?>">
							<?php	include("templates/icons/$type/$iconType.svg"); ?>
						</icon>

						<?php } ?>
						
					<?php	} ?>

			<?php } ?>

		</inner-column>
	</section>

	<?php } ?>

</main>

	<footer>
		<inner-column>
			<?php include("partials/site-footer.php"); ?>
		</inner-column>
	</footer>
	
</body>
</html>





