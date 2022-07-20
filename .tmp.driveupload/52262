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
	$headingCard = '';
	$imageCard = '';

	$articleCard = getPageDataByType($pageData, 'article');

	$headingCard = getPageDataByType($pageData, 'header');

	$imageCard = getPageDataByType($pageData, 'image');
	
?>

<body>
	<header>
		<inner-column class="site-header">
			<?php include('../header.php'); ?>
		</inner-column>
	</header>

	<main>
		<inner-column>

			<full-grid>
				<heading>
					<?php foreach ($headingCard as $item) { ?>	
					 	<h2 class="attention-voice"><?=$item['heading'];?></h2>
					 	<p class="quiet-voice"><?=$item['text'];?></p>
					 <?php } ?>
				</heading>
			
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
				</article>
			
				
				
			</full-grid>

		</inner-column>

	</main>

	<footer>
		<inner-column>
			<?php include('../footer.php'); ?>
		</inner-column>
	</footer>
	
</body>
</html>