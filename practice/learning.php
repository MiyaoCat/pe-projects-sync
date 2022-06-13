<head>
	
</head>

<body>

	<h1>Using PHP as a Separate Block</h1>
	<?php
		$name = "John";
		$state = "WA";
		$url = "https://www.espn.com/";

		$noun = "credit card";
		$verb = "eat";
		$bodyPart = "finger";
		$adjective = "heavy";

		echo "<p>" . "Hello " . $name . ". Your number is " . 100 * 2 / 4 / 5 . " You like to visit this site: " . "<a href=$url>espn.</a>" . "</p>";
	?>

	<h1>Using the Echo directly in the HTML</h1>

		<p>Today, every student has a computer small enough to fit into their <strong><?php echo $noun; ?></strong>. You can solve any math problem by simply pushing the computer’s little <strong><?php echo $noun; ?>s</strong>.
		<br><br>
		Computers can add, multiply, divide, and <strong><?php echo $verb; ?></strong>. They can also <strong><?php echo $verb; ?></strong> better than a human.
		<br><br>
		Some computers have their own <strong><?php echo $bodyPart; ?></strong>. Other’s have a/an <strong><?php echo $adjective; ?></strong> screen that shows all kinds of <strong><?php echo $noun; ?>s</strong> and <strong><?php echo $adjective; ?></strong> figures.</p>

	<h1>Using PHP directly in the HTML</h1>
	<h2>Easiest IMO</h2>

	<p>Today, every student has a computer small enough to fit into their <strong><?=$noun?></strong>. You can solve any math problem by simply pushing the computer’s little <strong><?=$noun?>'s</strong>.
	<br><br>
	Computers can add, multiply, divide, and <strong><?=$verb?></strong>. They can also <strong><?=$verb?></strong> better than a human.
	<br><br>
	Some computers have their own <strong><?=$bodyPart?></strong>. Other’s have a/an <strong><?=$adjective?></strong> screen that shows all kinds of <strong><?=$noun?>s</strong> and <strong><?=$adjective?></strong> figures.</p>

	<h1>If/Else Statements with PHP</h1>
	<?php 
		$time = 23;
		$name = John;
		
		echo "Hello, " . $name . "! It's " . "hour " . "<strong>" . $time . "</strong>" . ".";

		if ($time <= 10) {
			echo "Good morning! Want breakfast?";
		}
		elseif ($time == 12) {
			echo "Time to each lunch!";
		}
		elseif ($time <= 17) {
			echo "Are you hungry? Want a snack?";
		}
		elseif ($time <= 19) {
			echo "Wash your hands! It's time for dinner!";
		}
		else {
			echo "Get to bed!";

		}
	 ?>
</body>

























