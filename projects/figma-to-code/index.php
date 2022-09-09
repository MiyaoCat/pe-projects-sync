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

	<section class="<?=$name?>" style="border: 2px solid black; padding: 5px">
		<h1 class="loud-voice"><?=$name?></h1>

		<?php foreach ($section["modules"] as $module) {
					$type = $module["type"];
		?>

			<module class="<?=$type?>" style="border:1px solid red; display:block">
				<inner-column style="display: block">
					<?php include("templates/modules/$type.php"); ?>
					
					<?php if ( isset($section["components"]) ) {
						foreach ($section["components"] as $component) {
							if ($component["type"] == "button") {
							$buttonType = $component["buttonType"];
					
							include("templates/components/buttons/$buttonType.php");
							}
					
							if ($component["type"] !== "button") {
								$type = $component["type"];
							
							include("templates/components/$type.php");	
							}
					
						}
					} ?>
				</inner-column>
			</module>

		<?php } ?>
	</section>
<?php } ?>

</main>

	<footer>
		<inner-column>
			
		</inner-column>
	</footer>
	
</body>
</html>





