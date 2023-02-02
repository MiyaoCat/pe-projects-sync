
<?php 
	if($component["type"] == "button") { 
		$buttonStyle = $component["style"];
		$buttonText = $component["text"];
		$buttonSize = $component["size"];
		$buttoncorners = $component["corners"];
		$buttonArrow = $component["arrow"];

		
			$arrowDirection = $component["arrow-direction"];
?>
	<button class="<?=$buttonStyle?> <?=$buttonSize?> <?=$buttoncorners?> <?=$arrowDirection?>">

	
		<!-- <div class="button-info"> -->
			<div class="button-text"><?=$buttonText?></div>
			
			<div class="arrow">
				<?php 
					if( $component["arrow"] != "" ) {
						include($component["arrow"]);
					} 
				 ?>
			</div>
		<!-- </div> -->
	</button>

<?php } ?>