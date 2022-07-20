<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta property="og:image" content="[IMAGE URL]">
	<meta name="description" content="Layout Challenges">
	<title></title>

	<link rel="stylesheet" href="../css/style.css">
</head>

<?php 
	$json = file_get_contents('data2.json');
	$pageData = json_decode($json, true);

	function getPageDataByType ($items, $type) {

		$filtered = [];

		foreach ($items as $item) {
			if($item['type'] == $type) {
				array_push($filtered, $item);
			}
		} return $filtered;
	}

	$articleCard = '';
	$imageCard = '';

	$articleCard = getPageDataByType($pageData, 'article');
	$headingCard = getPageDataByType($pageData, 'header');
	$imageCard = getPageDataByType($pageData, 'image');
	$excerpts = getPageDataByType($pageData, 'excerpt');
?>

<body>
	<header>
		<inner-column class="site-header">
			<?php include('../header.php'); ?>
		</inner-column>
	</header>

	<main>

		<full-grid>
			<inner-column>
			<intro>
				
				<?php foreach ($headingCard as $item) { ?>
					<p class="teaser normal-voice">
						<?=$item['teaser'];?>
					</p>	

				 	<h2 class="intro attention-voice">
				 		<?=$item['heading'];?>
				 	</h2>

				 	<p class="intro normal-voice">
				 		<?=$item['text'];?>
					</p>
				<?php } ?>
				
			</intro>
		
			<article>

				<ul class="article-list">
					<?php foreach ($articleCard as $item) { ?>	
				 	
				 	<li class="article-card">
				 		<icon>
				 		<?php include("../images/icon.php"); ?>
				 		</icon>
				 
				 		<h3 class="attention-voice"><?=$item['heading'];?></h3>

				 		<p class="quiet-voice"><?=$item['text'];?></p>
				 	</li>
					 <?php } ?>
				</ul>

			</article>


			<excerpt-text>
				<div class="line"><p></p></div>
		
					<?php foreach ($excerpts as $excerpt) {?>
						<p class="quiet-voice"><?=$excerpt['text']?></p>
					<?php } ?>	
				
			</excerpt-text>
			</inner-column>
		</full-grid>

	</main>

	<footer>
		<inner-column>
			<?php include('../footer.php'); ?>
		</inner-column>
	</footer>
	
</body>
</html>