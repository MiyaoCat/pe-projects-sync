<?php  
	$json = file_get_contents("data/layout1.json");
	$pageData = json_decode($json, true);
?>

<?php  
	foreach ($pageData as $header) {
		if ($header["type"] == "header") {		
?>
			<page-header>
				<h2 class="loud-voice"><?=$header["heading"]?></h3>
				<p class="normal-voice"><?=$header["text"]?></p>
			</page-header>
		<?php } ?>
	<?php } ?>

<article-grid>
	<?php 
		foreach ($pageData as $article) {
			if ($article["type"] == "article") {
	?>
				<article-card>
					<h3 class="attention-voice"><?=$article["heading"]?></h3>
					<p class="normal-voice"><?=$article["text"]?></p>
				</article-card>
			<?php } ?>
		<?php } ?>
</article-grid>

<image-grid>
	
		<?php 
			foreach ($pageData as $image) {
				if ($image["type"] == "image") {
		?>
				<picture>
					<img src="<?=$image['img']?>" alt="">
				</picture>	
				<?php } ?>
			<?php } ?>
	
</image-grid>

