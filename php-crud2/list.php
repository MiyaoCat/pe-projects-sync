<?php 
	$json = file_get_contents('data/players.json');
	$players = json_decode($json, true);

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

		$players = $filtered;
	} 
 ?>

<h1>List Page</h1>

<ul>
	<?php foreach ($players as $player) { ?>
	<li class="athlete">
		<athlete-card>
			<h2 class='loud-voice'>
				<?=$player['firstName']?> 
				<?=$player['lastName']?>
			</h2> 

			<h3 class="attention-voice">Sport: </h3>
			<a class="sport" href="?page=list&sport=<?=$player['sport']?>"><?=$player['sport']?>
			</a>
		

			<a class="attention-voice" href="?page=detail&slug=<?=$player['slug']?>">
				Player Bio
			</a>
		</athlete-card>
	</li>
	<?php } ?>
</ul>