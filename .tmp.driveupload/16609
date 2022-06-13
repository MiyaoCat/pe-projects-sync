<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta property="og:image" content="[IMAGE URL]">
	<meta name="description" content="How many characters did you type?">
	<title></title>

	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
	<header>
		<section class='inner-column'>
			
		</section>
	</header>

	<main>
		<section class="inner-column">

			<h1 class="loud-voice">Let's do Math!</h1>
			<p class="regular-voice">Just type in your numbers and watch the magic happen!</p>
			<?php 
					$number1 = "";
					$number2 = "";

					if ( isset ($_POST["no1"]) ) {
						$number1 = $_POST["no1"];
					}

					if ( isset ($_POST["no2"]) ) {
						$number2 = $_POST["no2"];
					}

					$multiply = ($number1) * ($number2);
					$divide = ($number1) / ($number2);
					$add = ($number1) + ($number2);

				?>
				
			<form method="POST">

				<input 
					type="number" 
					name="no1" 
					value="<?=$number1?>"
					min="0"
					placeholder="Enter your first number"
					label="write your number">
				<input 
					type="number" 
					name="no2" 
					value="<?=$number2?>"
					placeholder="Enter your second number">
				<div class="instructions">
					<button type="submit" name="submitted">Submit</button>
					
					<p>Your total is: <span class="special"><?=$multiply?></span></p>
					<p>Your total is: <span class="special"><?=$divide?></span></p>
					<p>Your total is: <span class="special"><?=$add?></span></p>
				</div>
			</form>

		</section>

	</main>

	<footer>
		<section class="inner-column">
			
		</section>
	</footer>
	
</body>
</html>