<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta property="og:image" content="[IMAGE URL]">
	<meta name="description" content="[SHORT PAGE DESCRIPTION]">
	<title></title>

	<link rel="stylesheet" href="../css/style.css">
</head>

<?php $json = file_get_contents('data.json');
		$infoCards = json_decode($json, true); 

		function getInfoCardsByLevel ($objects, $level) {
			$filtered = [];

			foreach ($objects as $object) {
				if ($object['level'] == $level) {
					array_push($filtered, $object);
				}
			}
			return $filtered;
		}

		$headings = getInfoCardsByLevel($infoCards, 'level');

		function renderLevel ($headings) {
			foreach ($headings as $object) {
				echo $object;
			}
		}
?>

<body>
	<header>
		<inner-column class="site-header">
			<?php include('../header.php'); ?>
		</inner-column>
	</header>

	<main>
		<inner-column>
			<large-card>
				<h2 class="loud-voice">Heading Level 2 Large</h2>
				<p class="normal-voice">Lorem, ipsum dolor sit amet consectetur, adipisicing elit. Iusto et iure, commodi distinctio, alias quidem.</p>
			</large-card>
			<grid-component>
			<small-card>
				<?php include('small-heading.php'); ?>
			<small-card>
			</grid-component>	
		</inner-column>

	</main>

	<footer>
		<inner-column>
			<?php include('../footer.php'); ?>
		</inner-column>
	</footer>
	
</body>
</html>