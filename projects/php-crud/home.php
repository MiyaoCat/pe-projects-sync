<h class='shout-voice'>Home of the WA Pro Athletes</h1>

<?php include('data/players.php'); 

	foreach ($playersData as $player) {
?>

<player-card>
	<ul>
		<li><h2 class='loud-voice'>Name: <?=$player['name']?></h2></li>
		<li><h3 class='attention-voice'>Sport: <?=$player['sport']?></h3></li>
		<li><h3 class="normal-voice"><a href="?page=detail&id=<?=$player['id']?>">Details</a></h3></li>
	</ul>	
</player-card>


<?php }  ?>
