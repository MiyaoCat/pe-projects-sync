<?php 

	$json = file_get_contents('data/players.json');
	$players = json_decode($json, true);

	$currentId = '';

	if ( isset($_GET['slug']) ) {
		$currentId = $_GET['slug'];
	}

	foreach ($players as $player) {
		if ($currentId == $player['slug']) {
			$selectedPlayer = $player;
		}

	} 
	
 ?>
<?php if ( isset($selectedPlayer) ) { ?>

<h1 class='loud-voice'><?=$selectedPlayer['firstName']?> <?=$selectedPlayer['lastName']?></h1>

<picture>
	<img src="https://peprojects.dev/images/portrait.jpg" alt="portrait">
</picture>

<h2 class="loud-voice">Sport: <?=$selectedPlayer['sport']?></h2>

<h2 class="loud-voice">City: <?=$selectedPlayer['city']?></h2>

<h2 class="attention-voice">High School: <?=$selectedPlayer['highSchool']?></h2>

<h2 class="attention-voice">Accolades: </h2>

<ul>
	<?php foreach ($selectedPlayer['accolades'] as $accolade) { ?>
		<li><?=$accolade?></li>
	<?php } ?>	
</ul>

<?php }  else { ?>

	<h1>No player found :(</h1>
<?php } ?>