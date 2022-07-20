<?php 
	$json = file_get_contents('data/players.json');
	$players = json_decode($json, true);

	if ( isset($_GET["sport"]) ) {
		$sport = $_GET["sport"];
	} else {
		$sport = false;
	}
	
	if ( isset($_GET["college"]) ) {
		$college = $_GET["college"];
	} else {
		$college = false;
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

	$filteredbyCollege = [];

	if ($college) {
		foreach ($players as $player) {
			if ($player['college'] == $_GET['college']) {
				array_push($filteredbyCollege, $player);
			}
		}

	$players = $filteredbyCollege;	
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

			<h3 class="attention-voice">Sport: 
				<a class="sport" href="?page=list&sport=<?=$player['sport']?>"><?=$player['sport']?>
				</a>
			</h3>
			
			<h3 class="attention-voice">College: 
				<a class="college" href="?page=list&college=<?=$player['college']?>"><?=$player['college']?>
				</a>
			</h3>
			
			<a class="attention-voice" href="?page=detail&slug=<?=$player['slug']?>">
				Player Bio
			</a>
		</athlete-card>
	</li>
	<?php } ?>
</ul>