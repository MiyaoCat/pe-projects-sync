<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta property="og:image" content="[IMAGE URL]">
	<meta name="description" content="[SHORT PAGE DESCRIPTION]">
	<title></title>

	<link rel="stylesheet" href="css/style.css">
</head>

<?php 
	$json = file_get_contents('data/players.json');

	$playersData = json_decode($json, true);
	$players = $playersData['playersData'];
	
	if ( isset($_GET['page']) ) {
		$page = $_GET['page'];
	}

	if ( isset($_GET["sport"]) ) {
			$sport = $_GET["sport"];
		} else {
			$sport = false;
		}

	// - - FILTER FUNICTION - - 
	
	if ($sport) {
		//initilize variable
		$filtered = [];
		
		//when page is clicked
		//display only basketball players
		
		//loop through dataset to find sport == basketball
		foreach ($playersData as $player) {
			//Look for sport == basketball
			if ($player['sport'] == $_GET['sport']) {
				array_push($filtered, $player);
			}
		}
		//display basketball player info
		$playersData = $filtered;
	}
?>

<body>
	
	<header>
		<section class="inner-column">
			<nav class="mast-head">
				<ul>
					<li><a href="?page=athletes">Athletes</a></li>
					<li><a href="?page=basketball">Basketball</a></li>
					<li><a href="?page=football">Football</a></li>
					<li><a href="?page=huskies">Huskies</a></li>
				</ul>
			</nav>
		</section>
	</header>

	<main>
		<section class="inner-column">
			<?php if ($page == "athletes") { ?>
				<h1>List of All Athletes</h1>
			<?php } ?>	
			
			<ul>
				<?php if ($page == "detail") {
						include("pages/detail.php"); 
				} ?>

				<?php	foreach ($players as $player) { ?>
					<li>
						<player-card>
							<h2><?=$player['firstName']?> <?=$player['lastName']?></h2>
							<h3><?=$player['sport']?></h3>
							<h4><a href="?page=detail&id=<?=$player['id']?>">Details</a></h4>
						</player-card>
					</li>
				<?php } ?>
			</ul>
		</section>

	</main>

	<footer>
		<section class="inner-column">
			
		</section>
	</footer>
	
</body>

</html>