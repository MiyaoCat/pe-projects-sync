<?php  
	$json = file_get_contents("data/site-footer.json");
	$footerData = json_decode($json, true);
?>

<div class="site-map">

<?php  foreach ($footerData as $component) { ?>
	
	<?php 
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