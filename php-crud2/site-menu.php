<?php 
	$json = file_get_contents('data/players.json');
	$players = json_decode($json, true);

	if ( isset($_GET['sport']) ) {
		$sport = $_GET['sport'];
	} else {
		$sport = false;
	}
	
	$filtered = [];

	if ($sport) {
		foreach ($players as $player) {
			if ($player['sport'] == $_GET['sport']) {
				array_push($filtered, $player);
			}
		}
	}	$players = $filtered;
?>

<nav class="site-menu">
	<a href="?page=home">Home</a>
	<a href="?page=list">All Athletes</a>
	<a href="?page=basketball&sport=basketball">Basketball</a>
	<a href="?page=football&sport=football">Football</a>
	<a href="?page=huskies">Huskies</a>
</nav>