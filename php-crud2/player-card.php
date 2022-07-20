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

<ul>
<?php
	foreach ($players as $player) {
		$fname = $player['firstName'];
		$lname = $player['lastName'];
?>
	<li>
		<h2 class="loud-voice"><a href="?page=detail&slug=<?=$player['slug']?>">
			<?=$fname?> <?=$lname?></a>
			</h2>
	</li>
	<?php } ?>
</ul>

