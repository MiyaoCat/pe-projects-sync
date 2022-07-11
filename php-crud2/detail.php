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

<h2 class='loud-voice'><?=$selectedPlayer['firstName']?> <?=$selectedPlayer['lastName']?></h1>

<picture>
	<img src="<?=$selectedPlayer['portrait']?>" alt="portrait">
</picture>

<h3 class="loud-voice">Sport: <?=ucfirst($selectedPlayer['sport'])?></h3>

<h3 class="loud-voice">Hometown: <?=$selectedPlayer['city']?></h3>

<h3 class="attention-voice">High School: <?=$selectedPlayer['highSchool']?></h3>

<h3 class="attention-voice">Graduating Class: <?=$selectedPlayer['class']?></h3>

<h3 class="attention-voice">College: <?=$selectedPlayer['college']?></h3>

<?php 
	
	$status = "No";

	if ($selectedPlayer['retired']) {
		$status = "Yes"; 
	} 

 ?>

<h4 class="attention-voice">Retired: <?=$status?></h4>


<h4 class="attention-voice">Accolades: </h4>

<ul>
	<?php foreach ($selectedPlayer['accolades'] as $accolade) { ?>
		<li><?=$accolade?></li>
	<?php } ?>	
</ul>

<?php }  else { ?>

	<h1>No player found :(</h1>
<?php } ?>