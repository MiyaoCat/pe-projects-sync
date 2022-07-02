<?php 
	$json = file_get_contents('data/players.json');
	$players = json_decode($json, true);

 ?>

<h1 class="loud-voice">WA Pro Basketball Players</h1>

<?php include('detail.php');?>