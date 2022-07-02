<?php 
	$json = file_get_contents('data/players.json');
	$players = json_decode($json, true);
	$page = null;

	if ( isset($_GET['page']) ) {
		$page = $_GET['page'];
	}	else {
		$page = 'home';
	}

	if ( isset($_GET["college"]) ) {
		$college = $_GET["college"];
	} else {
		$college = false;
	}
	
	if ($college) {
		$filtered = [];
		foreach ($players as $player) {
			if ($player['college'] == $_GET['college']) {
				array_push($filtered, $player);
			}
		}
	} $players = $filtered;
	
?>

<h1 class="loud-voice">Pro Huskies!</h1>

<ul>
	<?php foreach ($players as $player) { ?>
	<li class="athlete">
		<athlete-card>
			<h2 class='loud-voice'>
				<?=$player['firstName']?> 
				<?=$player['lastName']?>
			</h2> 

			<h3>Sport: 
			<a href="?page=<?=$player['sport']?>&sport=<?=$player['sport']?>"><?=$player['sport']?>
			</a>
		</h3>

			<a href="?page=detail&slug=<?=$player['slug']?>">
				Player Bio
			</a>
		</athlete-card>
	</li>
	<?php } ?>
</ul>