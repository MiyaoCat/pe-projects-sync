<?php 
	if($component["type"] == "client-review-card") { 
			$rating = $component['rating'];
			$review = $component['review'];
			$avatar = $component['avatar'];
			$name = $component['name'];
?>

	<review-card>
		
		<star-rating>
			<?php 
				if ($rating) {
				foreach( [1, 2, 3, 4, 5] as $stars) {
					include($rating); 
				}
			} ?>
		</star-rating>
		<p class="review normal-voice"><?=$review?></p>

		<client-details>
			<img src="<?=$avatar?>" alt="picture of client">
			
			<div class="contact">
					<p class="calm-voice-bold"><?=$name?></p>
					<?php if ( isset($component['role']) ) { ?>
					<p class="whisper-voice"><?=$component['role']?></p>
			<?php	} ?>
			</div>	
		</client-details>

	</review-card>

<?php } ?>

