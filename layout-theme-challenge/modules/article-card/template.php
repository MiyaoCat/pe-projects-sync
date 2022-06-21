
<?php
	$heading = $article['heading'];
	$description = $article['description'];
	$thumbnail = $article['thumbnail'];
	$price = $article['price'];
?>

<article class='article-card'>
	<picture>
		<img src='images/<?=$thumbnail?>' alt='<?=$description?>'>
	</picture>

	<ul class="size-chart">
		<?php 
			$sizes = $article['sizes'];

			foreach ($sizes as $size) {
		?>

			<li class="calm-voice"><?=$size?></li>	
		
		<?php } ?>
	</ul>
	<!-- <ul class='size-chart'>
		<li class="calm-voice">S</li>
		<li class="calm-voice">M</li>
		<li class="calm-voice">L</li>
		<li class="calm-voice">XL</li>
	</ul> -->

	<text-content>
		<p class="strong-voice">$<?=$price?></p>
		<h1 class='title strong-voice'><?=$heading?></h1>

		<p class='teaser'><?=$description?></p>

		<a class='button' href='#'>Add to Cart</a>
	</text-content>
</article>
