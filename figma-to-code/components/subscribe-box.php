<div class="subscribe-box">
<?php 
	if($component["type"] == "subscribe-box") { 
		$heading = $component["heading"];
		$placeHolder = $component["placeholder-text"];
		$text = $component["text"];
?>
	
		<h4 class="alert-voice"><?=$heading?></h4>

		<div class="email-input">
			<input type="email" placeholder="<?=$placeHolder?>">
			<?php include("./assets/icons/arrow-right.svg") ?>
		</div>
		
		<p class="normal-voice"><?=$text?></p>
<?php } ?>
</div>