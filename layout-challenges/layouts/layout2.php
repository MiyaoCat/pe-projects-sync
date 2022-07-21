
<?php 
	$json2 = file_get_contents('data/data2.json');
	$pageData2 = json_decode($json, true);

	function getPageDataByType2 ($items2, $type2) {

		$filtered2 = [];

		foreach ($items2 as $item2) {
			if($item2['type'] == $type2) {
				array_push($filtered2, $item2);
			}
		} return $filtered2;
	}

	$articleCard2 = '';
	$imageCard2 = '';
	$excerpt2 = '';

	$articleCard2 = getPageDataByType2($pageData2, 'article');
	$headingCard2 = getPageDataByType2($pageData2, 'header');
	$imageCard2 = getPageDataByType2($pageData2, 'image');
	$excerpt2 = getPageDataByType2($pageData2, 'excerpt');
?>
<div class='header'>
	<inner-column>
		<h1 class="screaming-voice">Tuesday Layout</h1>
	</inner-column>
</div>

<intro>
	<?php foreach ($headingCard2 as $item2) { ?>
		<p class="teaser normal-voice">
			<?=$item2['teaser'];?>
		</p>	

	 	<h2 class="intro attention-voice">
	 		<?=$item2['heading'];?>
	 	</h2>

	 	<p class="intro normal-voice">
	 		<?=$item2['text'];?>
		</p>
	<?php } ?>
</intro>

<article>
	<ul class="article-list">
		<?php foreach ($articleCard2 as $item2) { ?>	
	 	
	 	<li class="article-card">
	 		<icon>
	 		<?php include("./images/circle.php"); ?>
	 		</icon>
	 
	 		<h3 class="attention-voice"><?=$item2['heading'];?></h3>

	 		<p class="quiet-voice"><?=$item2['text'];?></p>
	 	</li>
		 <?php } ?>
	</ul>
</article>


<excerpt>
	<p class="quiet-voice">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus id cupiditate repellendus, officiis, iusto saepe.</p>
		<!-- <?php foreach ($excerpt2 as $item2) {?>
			<p class="quiet-voice"><?=$item2['text']?></p>
		<?php } ?>	 -->
</excerpt>
			
