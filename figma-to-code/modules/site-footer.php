<?php  
	$json = file_get_contents("data/site-footer.json");
	$footerData = json_decode($json, true);
?>

<div class="footer-top">
	
	<div class="site-map">
		<?php  
			foreach ($footerData as $component) { 
				if($component["type"] == "site-map") { 
					$heading = $component["heading"]; ?>
						
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
		<?php } ?>
	</div>
	
	<div class="subscribe">
		<?php  
			foreach ($footerData as $component) { 
				if($component["type"] == "subscribe-box") { 
					include("components/$component[type].php");
				}	
			} 
		?>
	</div>

</div>

<div class="footer-bottom">
	<ul class="legal">
	<?php  
		foreach ($footerData as $component) { 
			if($component["type"] == "legal") { 
				foreach($component["items"] as $item) { 
					$text = $item['text'];
		?>
			<li>
				<p class="normal-voice"><?=$text?></p>
			</li>
				<?php } ?>
			<?php } ?>
		<?php } ?>			
	</ul>

	<ul class="socials">
	<?php  
		// foreach ($footerData as $component) { 
		// 	if($component["type"] == "socials") { 
		// 	}
		// }
	?>	
	
		<?php	foreach($component["items"] as $social) { ?>
			<li>
				<?php include($social['source']) ?>
			</li>
		<?php } ?>
	</ul>

</div>


















