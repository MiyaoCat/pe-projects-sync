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
<?php 
	$firstName = $selectedPlayer['firstName'];
	$lastName = $selectedPlayer['lastName'];
	$sport = $selectedPlayer['sport'];
	$city = $selectedPlayer['city'];
	$highSchool = $selectedPlayer['highSchool'];
	$class = $selectedPlayer['class'];
	$college = $selectedPlayer['college'];

	if ( isset($selectedPlayer) ) { 
		
		$specialclass = "";

		if ($college == "University of Washington") {
			$specialClass = "uw";
		} 

?>
<detail>
	
	<picture>
		<img class='<?=$specialClass?>' src="<?=$selectedPlayer['portrait']?>" alt="portrait">
	</picture>
	<player-bio>
		<h2 class='name loud-voice'><?=$firstName?> <?=$lastName?></h1>

		<h3 class="sport loud-voice">Sport: <?=ucfirst($sport)?></h3>

		<h3 class="hometown loud-voice">Hometown: <?=$city?></h3>

		<h3 class="high-school attention-voice">High School: <?=$highSchool?></h3>

		<h3 class="grad-class attention-voice">Graduating Class: <?=$class?></h3>

		<h3 class="college attention-voice">College: <?=$college?></h3>

		<?php 
			$status = "No";

			if ($selectedPlayer['retired']) {
				$status = "Yes"; 
			} 
		 ?>

		<h4 class="retired attention-voice">Retired: <?=$status?></h4>


		<h4 class="accolades attention-voice">Accolades: </h4>

		<ul>
			<?php foreach ($selectedPlayer['accolades'] as $accolade) { ?>
				<li><?=$accolade?></li>
			<?php } ?>	
		</ul>
	</player-bio>
</detail>
<?php }  else { ?>

	<h1>No player found :(</h1>
<?php } ?>