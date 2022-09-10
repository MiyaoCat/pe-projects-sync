<?php
		$review = $component["review"];
		$avatar = $component["avatar"];
		$name = $component["name"];
?>	

<client-review-card>
	<star-rating>
		<svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M10.5 0.5L13.59 6.76L20.5 7.77L15.5 12.64L16.68 19.52L10.5 16.27L4.32 19.52L5.5 12.64L0.5 7.77L7.41 6.76L10.5 0.5Z" fill="#3261E9"/>
		</svg>
		
		<svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M10.5 0.5L13.59 6.76L20.5 7.77L15.5 12.64L16.68 19.52L10.5 16.27L4.32 19.52L5.5 12.64L0.5 7.77L7.41 6.76L10.5 0.5Z" fill="#3261E9"/>
		</svg>
		
		<svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M10.5 0.5L13.59 6.76L20.5 7.77L15.5 12.64L16.68 19.52L10.5 16.27L4.32 19.52L5.5 12.64L0.5 7.77L7.41 6.76L10.5 0.5Z" fill="#3261E9"/>
		</svg>
		
		<svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M10.5 0.5L13.59 6.76L20.5 7.77L15.5 12.64L16.68 19.52L10.5 16.27L4.32 19.52L5.5 12.64L0.5 7.77L7.41 6.76L10.5 0.5Z" fill="#3261E9"/>
		</svg>
		
		<svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M10.5 0.5L13.59 6.76L20.5 7.77L15.5 12.64L16.68 19.52L10.5 16.27L4.32 19.52L5.5 12.64L0.5 7.77L7.41 6.76L10.5 0.5Z" fill="#3261E9"/>
		</svg>
	</star-rating>
	
	<p class="normal-voice"><?=$review?></p>
	
	<picture>
		<img src="<?=$avatar?>" alt="client avatar">
	</picture>
	<p class="normal-voice"><?=$name?></p>
</client-review-card>