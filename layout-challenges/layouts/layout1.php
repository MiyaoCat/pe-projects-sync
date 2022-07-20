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
	$json = file_get_contents('data.json');
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
	$introCard = getPageDataByType($pageData, 'header');
	$imageCard = getPageDataByType($pageData, 'image');
	
?>

<body>
	<header>
		<inner-column class="site-header">
			<?php include('../header.php'); ?>
		</inner-column>
	</header>

	<main>
		<full-grid>
				<intro>
					<inner-column>
						<?php foreach ($introCard as $item) { ?>	
						 	<h2 class="loud-voice"><?=$item['heading'];?></h2>
						 	<p class="quiet-voice"><?=$item['text'];?></p>
						 <?php } ?>
					</inner-column>
				</intro>
			
				<article>
					<inner-column>
						<?php foreach ($articleCard as $item) {
						 ?>	
						<ul class="article-list">
						 	<h2 class="attention-voice"><?=$item['heading'];?></h2>
						 	<p class="quiet-voice"><?=$item['text'];?></p>
						</ul>
						<?php } ?>
					</inner-column>
				</article>
			
				<image-grid>
					<inner-column>
						<picture>
							<?php foreach ($imageCard as $item){ ?>
								<img class='images' src="<?=$item['img'];?>">
							<?php	} ?>
						</picture>
					</inner-column>
				</image-grid>

		</full-grid>
	</main>

	<footer>
		<inner-column>
			<?php include('../footer.php'); ?>
		</inner-column>
	</footer>
	
</body>
</html>