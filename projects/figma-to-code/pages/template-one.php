<?php  
	$json = file_get_contents("../data/pages/template-uno.json");
	$templateUno = json_decode($json, true);
?>

<?php
	foreach ($templateUno["sections"] as $section) {
		$name = $section["name"];
	
?>

	<section class="<?=$name?>" style="border: 2px solid black; padding: 5px">
		<h1 class="loud-voice"><?=$name?></h1>

		<?php foreach ($section["modules"] as $module) {
			$type = $module["type"];
		?>
			<module-type>
				<?php include("../templates/modules/$type.php"); ?>
			</module-type>
		<?php } ?>
	</section>

<?php } ?>