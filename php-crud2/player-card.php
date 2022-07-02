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
		$hs = $player['highSchool'];
		$class = $player['class'];
		$city = $player['city'];
		$college = $player['college'];
		$proSeasons = $player['proSeasons'];
?>
	<li>
		<h2 class="loud-voice"><a href="?page=detail&slug=<?=$player['slug']?>">
			<?=$fname?> <?=$lname?></a>
			</h2>
		<h3>Sport: 
			<a href="?page=<?=$player['sport']?>&sport=<?=$player['sport']?>"><?=$player['sport']?>
			</a>
		</h3>
		<h4>High school: <?=$hs?> </h4>
		<h4>City: <?=$city?> </h4>
		<h4>Class: <?=$class?> </h4>
		<h4>College: <?=$college?> </h4>
		<h4>Years Pro: <?=$proSeasons?> </h4>
	</li>
<?php } ?>
</ul>


<?php 
//if the college is UW
 ?>