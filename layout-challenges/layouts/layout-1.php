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
					<?php include('header-card.php'); ?>
				</heading>
			
				<article>
					<ul class="article-list">
						<?php foreach ($articleCard as $item) {
					 ?>

					 	<li><?php include('article-card.php') ?></li>
					 <?php } ?>
					</ul>
				</article>
			
				<image-grid>
					<picture>
						<?php foreach ($imageCard as $item){
							echo $item['img'];
								}?>
					</picture>
				</image-grid>
				
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