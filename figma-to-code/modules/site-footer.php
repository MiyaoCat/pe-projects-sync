<?php  
	$json = file_get_contents("data/site-footer.json");
	$footerData = json_decode($json, true);
?>

<?php  foreach ($footerData as $component) { ?>
	
	<?php 
		if($component["type"] == "product-list") { 
			$heading = $component["heading"]; ?>
			
			<div class="site-map">
				<ul class=<?=$heading?>>
					<h4 class="alert-voice"><?=$heading?></h4>
					<?php  
						foreach($component["items"] as $item) {
							$text = $item['text'];
					?>
						<li>
							<p class="alert-voice"><?=$text;?></p>
						</li>
					<?php } ?>
				</ul>

		<?php } ?>
			
	<?php  
		if($component["type"] == "information-list") { 
			$heading = $component["heading"];
	?>

			<ul class=<?=$heading?>>
				<h4 class="alert-voice"><?=$heading?></h4>
		
				<?php  
					foreach($component["items"] as $item) {
						$text = $item['text'];
				?>
					<li>
						<p class="alert-voice"><?=$text;?></p>
					</li>
				<?php } ?>

			</ul>
		</div>

	<?php } ?>

	<?php  
		if($component["type"] == "company-list") { 
			$heading = $component["heading"];
	?>

			<ul class=<?=$heading?>>
				<h4 class="alert-voice"><?=$heading?></h4>
		
				<?php  
					foreach($component["items"] as $item) {
						$text = $item['text'];
				?>
					<li>
						<p class="alert-voice"><?=$text;?></p>
					</li>
				<?php } ?>
				
			</ul>
		</div>

	<?php } ?>

<?php } ?>

