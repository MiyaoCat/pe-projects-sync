<style>
	body{
		background: hsl(200, 70%, 50%);
	}
</style>

<h1>PHP Arrays Practice</h1>

<?php 
	$headphones = [
		"Color" => "black",
		"Price" => 299,
		"On Sale" => false,
		"Brand" => "Sony",
	];

	foreach ($headphones as $key => $value) {
		echo "<strong>" . $key . "</strong>" . "<br>" . $value . "<br><br>";
	}

	echo "You've selected the " . $headphones["Color"] . " " . $headphones["Brand"] . " " . "headphones for $" . $headphones["Price"];
 ?>

 <?php 
 	$playoffTeams = [
 		"Warriors",
 		"Mavericks",
 		"Heat",
 		"Celtics"
 	];

  ?>

  <p>The <?=$playoffTeams[0]?> are playing the <?php echo $playoffTeams[1] ?> in the NBA playoffs right now.</p>

  <p>The <?=$playoffTeams[2]?> lost to the <?php echo $playoffTeams[4] ?> last night.</p>