<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<meta property="og:image" content="[IMAGE URL]">
		<meta name="description" content="Adopt a friendly Monster TODAY!">
		<title>Adopt a Monster</title>

		<link rel="stylesheet" href="css/style.css">
	</head>

	<body>
		<header>
			<section class='inner-column'>
				<nav>
					<div class="menu-wrapper">
						<img class='menu' src="./images/hamburger-menu.png">
					</div>
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">Monsters</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
				</nav>
			</section>
		</header>

		<main>
			<section class="inner-column">
			
				<h1 class='header-voice'>Adopt a Monster</h1>
			
			<?php include('monster-maker.php'); ?>
			 
				<?php 


					echo "<ul>";

						foreach ($monsters as $monster) {
							$id = $monster["id"];
							$name = $monster["name"];
							$portrait = $monster["portrait"];
							$age = $monster["age"];
							$status = $monster["adopted"];

							$story = "Boo! My name is " . $monster["name"] . ". My favorite food is " . $monster["favoriteFood"] . " and I love to " . $monster["interest"] . ".";

							
						$message = "I have a home!";

						if ($status == 1) {
							$message;
							$specialClass = "adopted";
						} else {
							$message = "Adopt me!";
							$specialClass = "not-adopted";
						} 					

							echo "<li class='monster $specialClass'>";

								echo 
									"<monster-card id='$id'>" .
										"<picture class='portrait'>" . "<img src='" . $portrait . "' . width='200'>" .
										"<h2 class='name'>" . $name . "</h2>" .
										"<h3 class='age'>" . "Age: " . $age . "</h3>" .
										"<p class='story'>" . $story . "</p>" .
										"<p class='link'>" . "<a href='#'>" . $message . "</a>" . "</p>" .


									"</monster-card>";

							echo "</li>";
							
						}
					echo "</ul>";
				?>
				
				<?php 
					function monsterGenerator($id, $name, $color, $interest, $favoriteFood, $adopted, $portrait) {
						$monster = [
							"id" => $id,
							"name" => $name,
							"color" => $color,
							"interest" => $interest,
							"favoriteFood" => $favoriteFood,
							"adopted" => $adopted,
							"portrait" => $portrait,	
						];
						return $monster;
					}

					$crunchy = monsterGenerator("a008", "Crunchy", "fuschia", "smashing pumpkins", "Jello", false, "./images/shadow.png");

					echo $crunchy["name"];
				 ?>

			</section>
		</main>

	</body>
</html>