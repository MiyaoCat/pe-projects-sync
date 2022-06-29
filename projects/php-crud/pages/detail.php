<?php 

// Get data from data/players.php
include ("data/players.php");

//Setup any variables we need
$currentPlayer = null;


//Look at each player 
foreach ($playersData as $player) {
	//If the player has user-selected ID
	if ($player["id"] == $_GET["id"]) {
		$currentPlayer = $player;
	}
}

//get that player data
	
// Display associated data from ID

 ?>

<h1 class="name"><?=$currentPlayer["name"]?></h1>
<h2 class="sport">Sport: <?=$currentPlayer["sport"]?></h2>
<h3 class="city">City: <?=$currentPlayer["city"]?></h3>
<h3 class="high-school">High School: <?=$currentPlayer["high school"]?></h3>
<picture class="portrait">
	<img src="http://peprojects.dev/images/portrait.jpg" alt="$todo">
</picture>

