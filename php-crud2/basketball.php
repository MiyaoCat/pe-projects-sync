<?php 
	$json = file_get_contents('data/players.json');
	$players = json_decode($json, true);

	$page = null;

	if ( isset($_GET['page']) ) {
		$page = $_GET['page'];
	}	else {
		$page = 'home';
	}

	if ( isset($_GET["sport"]) ) {
		$sport = $_GET["sport"];
	} else {
		$sport = false;
	}
	
	if ($sport) {
		$filtered = [];
		foreach ($players as $player) {
			if ($player['sport'] == $_GET['sport']) {
				array_push($filtered, $player);
			}
		}
	} $players = $filtered;
	
 ?>
<h1 class="loud-voice">WA Pro Basketball Players</h1>

<?php {
	include "player-card.php";
} ?>	