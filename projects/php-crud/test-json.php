<html>
	<?php 
		$json = file_get_contents('data/players.json');

		$athletes = json_decode($json, true);
		$players = $athletes['playersData'];
	?>


</html>