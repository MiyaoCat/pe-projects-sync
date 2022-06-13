<style>
	span {
		color: red;
		font-size: 18px;
	}

	h1 {
		font-size: 22px;
		font-family: Helvetica;
	}
	div {
		padding: 5px 10px;
		border: 2px solid black;
	}
	.hello {
		background-color: hsl(100, 30%, 70%);
	}
	.count-char {
		background-color: hsl(183, 30%, 70%);
	}
	.math {
		background-color: hsl(7, 30%, 70%);
	}
	.calculator {
		background-color: hsl(320, 30%, 70%);
	}
</style>

<div class="hello">
	<?php 

	function showPageErrors() {
		ini_set('display_errors', 1);
		ini_set('display_startup_errors', 1);
		error_reporting(E_ALL);
	}


	 ?>

	<h1>1. Saying Hello</h1>
	<p>Create a program that prompts for your name and prints a greeting using your name.</p>

	<form method="POST">
		<p>Hiya, what's your name?</p>
		<label for="name"></label>
		<input type="text" name="name" value="<?=$name?>" placeholder="Type your name">

	</form>
	<?php  

		$name = "";

		if ( isset($_POST["name"]) ) {
		$name = $_POST["name"];

		echo "<p class='entered-name'>Hi, $name. Nice to meet ya!</p>";
		}
		?>

</div>

<div class="count-char">
	<h1>2. Counting the Number of Characters</h1>
	<p>Create a program that prompts for an input string and displays output that shows the input string and the number of characters the string contains. </p>

	<?php 
		//setup. Establish variables
		$string = "";

		//If there's a form submission. Reassign values
		if ( isset($_POST["string"]) ) {
			 $string = $_POST["string"];
		};

		//calculations
		$length = strlen($string);

		$message = "The $string is $length long";

	 ?>


		 <form method="POST">
		 	<p>Please enter a string of chracters. PLEASE!</p>
		 	<input type="text" name="string" value="<?=$string?>">
		 	<p><?=$message?></p>
		 	<button type="submit" name="enter">Click</button>

		 </form>
</div>

<div class="math">
	<h1>3. Let's do Math!</h1>
	<p>Just follow the directions!</p>

	<?php 
		$number1 = 0;
		$number2 = 0;

		if ( isset ($_POST["no1"]) ) {
			$number1 = $_POST["no1"];
		}

		if ( isset ($_POST["no2"]) ) {
			$number2 = $_POST["no2"];
		}

		$total = ($number1) * ($number2);

	?>



	<form method="POST">
		<p>Enter a number</p>
		<input type="number" 
		name="no1" 
		value="<?=$number1?>"
		min="0">
		<p>Enter a second number</p>
		<input type="number" name="no2" value="<?=$number2?>">

		<button type="submit" name="submitted">Click!</button>
		<p>Your total is: <span class="red"><?=$total?></span></p>

	</form>
</div>

<div class="calculator">
	<h1>4. Tip Calculator!</h1>
	<p>What's the total?</p>
	<?php 
		$bill = 0;
		$tip = 0;

		if ( isset($_POST["bill"]) ) {
			$bill = $_POST["bill"];
		}

		if ( isset($_POST["tip"]) ) {
			$tip = $_POST["tip"];
		}

		$billTotal = $bill + $bill * ($tip / 100);
	 ?>

	<form method=POST>
		<p>Enter your bill amount</p>
		<input type="number"
		name="bill"
		value="<?=$bill?>"
		min="0">
		<p>Enter the tip rate</p>
		<input type ="number"
		name="tip"
		value="<?=$tip?>"
		min=0>

		<button type="submit" name="calculate">Click!</button>
		<p>Your total bill is <?=$billTotal?></p>
	</form>

</div>












