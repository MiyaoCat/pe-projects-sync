<!doctype HTML>
	<?php 
		//get file and give it a variable
		// $json = file_get_contents('data/players.json');

		// $playersData = json_decode($json, 1);

		include('data/players.php');

		if ( isset($_GET["page"]) ) {
			$page = $_GET["page"];
		} else {
			$page = "home";
		}

		if ( isset($_GET["sport"]) ) {
			$sport = $_GET["sport"];
		} else {
			$sport = false;
		}

	 ?>
<html lang='en'>
	<head>
		<meta charset='utf-8'>
		<title>WA Athletes</title>
		<style>
			test-area {
				border: 1px solid black;
				background-color: lightgray;
				margin: 5px 0;
			}
			ul {
				border: 1px solid black;
			}
			athlete-card, player-details {
				display: block;
			}
		</style>
	</head>
	<test-area>
		<?php 
		error_reporting(E_ALL);
		ini_set('display_errors', '1');

		function currentUrl() { 
	  	return $_SERVER['REQUEST_URI'];
		}
		echo currentUrl();
		?>
 </test-area>
	<header>
		<nav class="site-menu">
		 	<a href="?page=home">Home</a>
		 	<a href="?page=athletes">Athletes</a>
		 	<a href="?page=basketball">Basketball</a>

		 	<p><?=$page?> Page</p>
		 </nav>
	</header>

	<body>
		<?php if ($page == "home") { ?>

			<h1>Athletes Home Page</h1>

		<?php } ?>
	
	<!-- LIST OF ATHLETES -->
		<?php if ($page == "athletes") { ?>
			<a href="?page=athletes&sport=Basketball">
			Basketball</a>
			<a href="?page=athletes&sport=Football">
			Football</a>

			<?php //create new variable to hold filtered players(objects)
			if ($sport) {
				$filtered = [];

				//loop through player dataset
				foreach ($playersData as $player) {

					//IF the athlete's sport == sport set from url
					if ($player['sport'] == $_GET['sport']) {

						//Add player to filtered array
						array_push($filtered, $player); 
					}
				}
				$playersData = $filtered;
			} ?>
			
			<ul>
				<?php foreach ($playersData as $player) { ?>
				 	<li>
				 		<athlete-card>
				 			<h2><?=$player['name']?></h2>
				 			<h3><a href="?page=athletes&sport=<?=$player['sport']?>">
				 				<?=$player['sport']?>
				 			</a></h3>
				 			<a href="?page=detail&id=<?=$player['id']?>">Details</a>
				 		</athlete-card>
				 	</li>
				<?php } ?>
			</ul>
		<?php } ?>	

	<!-- BASKETBALL PAGE -->
	<?php 

		

		//then display those athlete's information

	?>	

<!-- DETAIL PAGE -->
	<?php 
		
		if ($page == 'detail') {
			$currentPlayer = null;

			foreach ($playersData as $player) {
				if ($player['id'] == $_GET['id']) {
					$currentPlayer = $player;
				}
			}
	?>
			<ul>
			 	<li>
			 		<athlete-detail>
			 			<h2><?=$currentPlayer['name']?></h2>
			 			<h3><?=$currentPlayer['sport']?></h3>
			 			<h4>HS: <?=$currentPlayer['high school']?></h4>
			 			<h4>City: <?=$currentPlayer['city']?></h4>
			 			<h4>Pro Team: <?=$currentPlayer['team']?></h4>
			 		</athlete-detail>
			 	</li>
		 	</ul>		
	<?php } ?>




	</body>

</html>

























