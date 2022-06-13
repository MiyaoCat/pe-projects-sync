<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta property="og:image" content="[IMAGE URL]">
	<meta name="description" content="Adopt a friendly Monster TODAY!">
	<title>Adopt a Monster</title>

	<link rel="stylesheet" href="css/style.css">	
</head>

<body>
	<?php 
		function monsterGenerator($id, $name, $color, $interest, $favoriteFood, $adopted, $portrait) {
			$monster = [
				"id" => $id,
				"name" => $name,
				"age" => $age,
				"color" => $color,
				"interest" => $interest,
				"favoriteFood" => $favoriteFood,
				"adopted" => $adopted,
				"portrait" => $portrait,	

			];
			return $monster;
		}

		$codey = monsterGenerator("a001", "Codey", "Red", "Scaring adults", "Rubber bands", 199, false, "./images/codey.png");

		$fragoo = monsterGenerator("a002", "Fragoo", "Rose", "Splashing in puddles", "shrimp and salmon", 2, false, "./images/fragoo.png");

		$lima = monsterGenerator("a003", "Limabean", "Green", "Gardening", "Lima Beans", 7, false, "./images/limabean.png");

		$monsters = [$codey, $fragoo, $lima];

	?>

	<?php foreach ($monsters as $monster) { ?>
		<li class="monster">
			<monster-card id="<?=$monster['id']?>">
				<picture class="portrait"><img src="<?=$monster[portrait]?>"></picture>
				<h2 class="name"><?=$monster["name"]?></h2>

				<p class="age"><?=$monster["age"]?></p>
				<p class="food"><?=$monster["favoriteFood"]?></p>
				<p class="color"><?=$monster["color"]?></p>
				<h3>Interest:</h3><p class="interest"><?=$monster["interest"]?></p>
				<p class="story">Boo! My name is <?=$monster["name"]?>.</p>
			</monster-card>
		</li>

	<?php } ?>
</body>