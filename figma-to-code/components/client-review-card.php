<?php 
	if($component["type"] == "client-review-card") { 
			$rating = $component['rating'];
			$review = $component['review'];
			$avatar = $component['avatar'];
			$name = $component['name'];
?>

	<review-card>
		<star-rating>
			<?php foreach( [1, 2, 3, 4, 5] as $stars) {
				include($rating); 
			} ?>
		</star-rating>
		<p class="normal-voice"><?=$review?></p>

		<client-details>
			<img src="<?=$avatar?>" alt="picture of client">
			<p class="calm-voice"><?=$name?></p>
		</client-details>
	</review-card>

<?php } ?>