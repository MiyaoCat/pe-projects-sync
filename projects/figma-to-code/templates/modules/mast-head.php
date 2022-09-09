<mast-head>
	<?php  
		$json = file_get_contents("data/mast-head.json");
		$mastHead = json_decode($json, true);
	?>
	
	<?php
		foreach ($mastHead["components"] as $component) {
			$type = $component["type"];
			$fileType = $component["fileType"];
	?>
	<div class="<?=$type?>">
		<?php 
			if ($type == "logo" OR $type == "nav") { 
				include("templates/components/$type.$fileType"); 
			} 
		?>
	</div>

		<?php  if ($type == "language") { ?>
			<div class="login">
		<?php	
			include("templates/components/$type.$fileType"); 					
				} elseif ($type == "button") {
				$buttonType = $component["buttonType"];
				include("templates/components/buttons/$buttonType.php"); 
			?>
			</div>
		<?php } ?>

	<?php } ?>


</mast-head>

