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
	$headingCard = '';
	$imageCard = '';

	$articleCard = getPageDataByType($pageData, 'article');

	$headingCard = getPageDataByType($pageData, 'header');

	$imageCard = getPageDataByType($pageData, 'image');
	
	$bodyCard = getPageDataByType($pageData, 'body');
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
						 	<h2 class="attention-voice"><?=$item['heading'];?></h2>
						 	<p class="quiet-voice"><?=$item['text'];?></p>
						 <?php } ?>
					</intro>
				
					<article>
						<ul class="article-list">
							<?php foreach ($articleCard as $item) { ?>	
						 	<thumbnail>
						 		<img src="<?=$item['thumbnail']?>" alt="">
						 	<thumbnail>	
						 	<h2 class="attention-voice"><?=$item['heading'];?></h2>
						 	<p class="quiet-voice"><?=$item['text'];?></p>
						 <?php } ?>
						</ul>
					</inner-column>
				</article>
				
			</full-grid>

		

	</main>

	<footer>
		<inner-column>
			<?php include('../footer.php'); ?>
		</inner-column>
	</footer>
	
</body>
</html>