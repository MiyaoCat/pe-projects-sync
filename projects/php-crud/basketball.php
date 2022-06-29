<h1>WA Basketball Players that went Pro</h1>

<?php 
	//get player data
	include('data/players.php');



	//loop through player data

	foreach ($playersData as $player) {
		include('modules/player-card.php');
	}
	//display player data in a list
	


 ?>