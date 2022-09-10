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
		<?php if ($type == "logo") { ?>
			
			<div class="<?=$type?>">
				<?php	include("templates/components/$type.$fileType"); ?>
			</div>

		<?php } ?>

		<?php if ($type == "nav") { ?>

			<nav>
				<?php	include("templates/components/$type.$fileType"); ?>
			</nav>

		<?php } ?>

		<?php  if ($type == "language") { ?>

			<div class="login">
				<?php	include("templates/components/$type.$fileType"); ?>					
			
				<?php	} elseif ($type == "button") {
						$buttonType = $component["buttonType"];

						include("templates/components/buttons/$buttonType.php"); 
				?>
			</div>

		<?php } ?>
	
	<?php } ?>


</mast-head>

