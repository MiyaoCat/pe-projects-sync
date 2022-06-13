

<?php 
$teams = [
	[
		"city" => "Sacramento",
		"name" => "Kings",
		"record" => "22-60",
		"playoffs" => false,
	],

	[
		"city" => "Golden State",
		"name" => "Warriors",
		"record" => "60-22",
		"playoffs" => true,
	],
	[
		"city" => "Portland",
		"name" => "Trailblazers",
		"record" => "15-67",
		"playoffs" => false,
	],
];
		

 ?>


<ol class="team-list" >
	<?php foreach($teams as $team) {
		
		$message = "Playoff Bound!";

		if ($team["playoffs"]) {
			  $message;
			} else {
			  $message = "We suck!";
			};  
	?>


		<team-card style="border:2px solid black">
			<h3><?=$team['name']?></h3>
			<p><?=$team['city']?></p>
			<p><?=$team['record']?></p>
			<p><?=$message?></p>
		</team-card>
	<?php } ?>
</ol>















