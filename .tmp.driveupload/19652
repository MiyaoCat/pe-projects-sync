<head>
	<style>
		html {
			background-color: hsl(200, 65%, 80%);
		}
		.foreach {
			padding: 10px;
			background-color: hsl(300, 65%, 60%);
		}
		.array {
			padding: 10px;
			background-color: hsl(400, 65%, 60%);
		}

		.foreach2 {
		padding: 10px;
		background-color: hsl(500, 65%, 60%);
		}

		.foreach2 ol {
			display: flex;
			flex-direction: row;
		}
		.monster {
			display: block;
			border: 2px solid black;
			padding: 15px;
			margin: 10px;
		}

	</style>
</head>

	
<div class="array">
	<h1>Array Practice</h1>

	<?php 

		$myArray = [
			"one",
			1,
			"three",
			3,
			"cat",
			true,
			false,
		];
		echo "I have " . $myArray[0] . " " . $myArray[4] . ".";

		$cody = [
			"id" => "001",
			"name" => "Cody",
			"color" => "Red",
			"interest" => "Scaring people",
			"favoriteFood" => "peas",
			"age" => 199,
			"adopted" => true,
			"portrait" => "https://peprojects.dev/images/portrait.jpg",
		];

		$lima = [
			"id" => "002",
			"name" => "Limabean",
			"color" => "Green",
			"interest" => "gardening",
			"favoriteFood" => "Lima beans",
			"age" => 7,
			"adopted" => false,
			"portrait" => "https://peprojects.dev/images/portrait.jpg",
		];

		$reads = [
			"id" => "003",
			"name" => "Miss Reads-a-lot",
			"color" => "gray",
			"interest" => "reading",
			"favoriteFood" => "book worms",
			"age" => 2022,
			"adopted" => false,
			"portrait" => "https://peprojects.dev/images/portrait.jpg",
		];

		$monsters = [$cody, $lima, $reads];

		echo " " . $cody["name"] . " is " . $cody["age"] . " years old.";

		$story = $cody["name"] . " is " . $cody["age"] . " years old and his favorite food is " . $cody["favoriteFood"] . ".";
		$template = "<p id=" . $cody["id"] . ">" . $story . "</p>";
		echo $template;
	 ?>

	<h4>This is written Outside of PHP block</h4>
	 <p>I have <?=$myArray[0]?> <?=$myArray[4]?>.</p>

	<h3>Learn About <?=$cody["name"]?> the Monster</h3>

	<p id="<?=$cody['id']?>">This monster's name is <?=$cody["name"]?>. Their favorite food is <?=$cody["favoriteFood"]?>.<br>
	<?=$cody["name"]?> is <?=$cody["age"]?> years old.</p>

</div>

<div class="foreach">
	<h1>ForEach Loops</h1>
	<?php 
		$nbaTeams = ["Kings", "Warriors", "Lakers", "Clippers", "Mavericks", "Spurs", "Rockets", "Knicks", "Bulls", "Raptors"];

		echo "<ol>";

		foreach ($nbaTeams as $team) {
			echo "<li>" . $team . "</li>";
		}
		
		echo "</ol>";
	
	 ?>
</div>

<div class="foreach2">
	<h1>ForEach Monsters Practice</h1>
	<?php 

		echo "<ol>";

		foreach ($monsters as $monster) {
			$id = $monster["id"];
			$name = $monster["name"];
			$portrait = $monster["portrait"];
			$status = $monster["adopted"];
			$story = "My favorite food is " . $monster["favoriteFood"] . " and I am " . $monster[age] . " years old.";

			if ($status == 1) {
				$status = "I have a home!";
			} else {
				$status = "Adopt me!";
			}
			
			echo "<li class='monster'>";

			echo 
				"<monster-card id='$id'>" .
					"<picture class='portrait'>" . "<img src='" . $portrait . "' . width='200'>" .
					"<h2 class='name'>" . $name . "</h2>" .

					"<p class='story'>" . $story . "</p>" .
					"<p class='status'>" . $status . "</p>" .


				"</monster-card>";

			echo "</li>";

			
		}
		echo "</ol>";

	 ?>
</div>