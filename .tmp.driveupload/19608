
<style type="text/css">

	form {
		max-width: 200px;
	}
	.field {

		display: flex;
		flex-direction: column;
	}
	.field label {
		font-size: 14px;
		margin-bottom: 4px;
	}

	button[type='submit'], .field + .field {
		margin-top: 10px;
	}
	.feedback {
		color: green;
	}
</style>


<?php 
	
	$guests = 0;
	$berries = 0;

	if (isset($_POST["submitted"])) {

		if ( isset($_POST["guests"]) ) {
			// if ( $_POST["guests"] >= 0 ) {
				$guests = $_POST["guests"];
			// }
		}	
		if ( isset($_POST["berries"]) ) {
			// if ( $_POST["berries"] >= 0) {
			$berries = $_POST["berries"];
			// }
		}

		$total = ($guests) * ($berries);

		echo "<p class='feedback'>$total</p>";

		// echo "you submitted " . $_POST["berries"] . " berries";
		// echo "<p class='feedback'>Submitted it</p>";
	};
 ?>


<form method='POST'>
	<p>Calculating number of berries</p>
	<h1>Form Stuff</h1>

	<div class="field">
		<label>Guests</label>
		<input type="number" 
		name="guests" 
		value="<?=$guests?>"
		min="0"
		max="10000"> 
	</div>

	<div class="field">
		<label>Berries per guest</label>
		<input type="number" name="berries" value="<?=$berries?>"> 
	</div>

	<button type='submit' name='submitted'>Enter!</button>
</form>


<!-- 
<form> 
	<h3>Text</h3>
	<input type="text" name="text">
	<h3>Number</h3>
	<input type="number" name="number">
	<h3>Email</h3>
	<input type="email" name="email">
	<h3>Password</h3>
	<input type="password" name="password">
	<h3>Submit</h3>
	<input type="submit" name="submit">
	<h3>Range</h3>
	<input type="range" name="range">
</form> -->