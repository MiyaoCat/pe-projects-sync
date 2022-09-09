<?php  
	$json = file_get_contents("data/mast-head.json");
	$mastHead = json_decode($json, true);
?>

<?php
	foreach ($mastHead["components"] as $component) {
		$type = $component["type"];
?>
	<div class="<?=$type?>">
		<?php 
			if ($type == "logo" OR $type == "language") {
				include("images/$type.svg");
			} 
			
			if ($type == "nav") {
				include("templates/components/$type.php"); 
			}

			if ($type == "button") {
				$buttonType = $component["buttonType"];
				include("templates/components/buttons/$buttonType.php"); 
			}
		?>

		
	</div>
<?php } ?>