<?php
		$review = $component["review"];
		$avatar = $component["avatar"];
		$name = $component["name"];
		$rating = $component["rating"];
?>	

<client-review-card>
	<star-rating>
		<?php include("$rating"); ?>
	</star-rating>

	<p class="review normal-voice"><?=$review?></p>
	
	<picture>
		<img src="<?=$avatar?>" alt="client avatar">
	</picture>

	<p class="name normal-voice"><?=$name?></p>
</client-review-card>