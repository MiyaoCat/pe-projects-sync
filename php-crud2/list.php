<?php 
	$json = file_get_contents('data/players.json');

	$players = json_decode($json, true);

 ?>
<h1>List Page</h1>

<ul>
	<?php foreach ($players as $player) { ?>
	<li class="athlete">
		<athlete-card>
			<h2 class='loud-voice'>
				<?=$player['firstName']?> 
				<?=$player['lastName']?>
			</h2> 

			<h3 class="attention-voice">Sport: 
				<?=$player['sport']?></h3>

			<a href="?page=detail&id=<?=$player['id']?>">
				Player Bio
			</a>
		</athlete-card>
	</li>
	<?php } ?>
</ul>